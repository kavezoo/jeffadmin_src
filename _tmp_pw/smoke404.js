const puppeteer = require('puppeteer-core');

(async () => {
  const browser = await puppeteer.launch({
    executablePath: 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe',
    headless: true,
    args: ['--no-sandbox'],
  });
  const page = await browser.newPage();
  const fails = [];
  page.on('response', async (res) => {
    if (res.status() === 404) fails.push(res.url());
  });
  page.on('pageerror', (e) => fails.push('PAGEERROR: ' + e.message));

  await page.goto('http://127.0.0.1:8765/index.php?m=form', {
    waitUntil: 'networkidle0',
    timeout: 60000,
  });
  await page.click('#tab-megjegyzes-btn');
  await new Promise((r) => setTimeout(r, 3000));
  console.log(fails.join('\n') || 'no 404');
  await browser.close();
})().catch((e) => {
  console.error(e);
  process.exit(1);
});
