const puppeteer = require('puppeteer-core');

(async () => {
  const browser = await puppeteer.launch({
    executablePath: 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe',
    headless: true,
    args: ['--no-sandbox'],
  });
  const page = await browser.newPage();
  const logs = [];
  page.on('console', (m) => logs.push(`${m.type()}: ${m.text()}`));
  page.on('pageerror', (e) => logs.push(`PAGEERROR: ${e.message}`));
  page.on('requestfailed', (r) => {
    logs.push(`REQFAIL: ${r.url()} ${r.failure()?.errorText || ''}`);
  });

  await page.goto('http://127.0.0.1:8765/_hugerte_smoke.html', {
    waitUntil: 'networkidle0',
    timeout: 60000,
  });
  await new Promise((r) => setTimeout(r, 2500));
  const text = await page.$eval('#log', (el) => el.textContent);
  console.log('---LOG---');
  console.log(text);
  console.log('---CONSOLE---');
  console.log(logs.join('\n'));

  // Also test form page tab flow
  await page.goto('http://127.0.0.1:8765/index.php?m=form', {
    waitUntil: 'networkidle0',
    timeout: 60000,
  });
  await page.click('#tab-megjegyzes-btn');
  await new Promise((r) => setTimeout(r, 3000));
  const hasTox = await page.$('.tox');
  const editor = await page.evaluate(() => {
    if (typeof hugerte === 'undefined') return { err: 'no hugerte' };
    const ed = hugerte.get('megjegyzes');
    return {
      hasEditor: !!ed,
      container: ed ? !!ed.getContainer() : false,
      editors: hugerte.editors?.length,
    };
  });
  console.log('---FORM---');
  console.log(JSON.stringify({ hasTox: !!hasTox, editor }, null, 2));
  console.log(logs.filter((l) => l.includes('PAGEERROR') || l.includes('REQFAIL') || l.includes('error')).join('\n'));

  await browser.close();
})().catch((e) => {
  console.error(e);
  process.exit(1);
});
