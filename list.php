<?php
/**
 * Lista — megjelenítési kapcsolók
 * $showRowId: true = ID oszlop látszik a 2. cellában; false = rejtve (data-id a soron marad)
 */
$showRowId = $showRowId ?? false;

$listRows = [
    [
        'id' => 1001,
        'category' => 'Administration',
        'name' => 'Gipsz Jakab',
        'email' => 'jakab@example.com',
        'description' => 'Samsung Galaxy S25 Ultra',
        'datetime' => '2026.03.15. 14:32',
        'date' => '2026.03.15.',
        'time' => '14:32',
        'integer' => '128',
        'status' => 'process',
        'status_label' => 'Processed',
        'price' => '679,00',
        'visible' => true,
        'created' => '2026.01.02. 08:14',
        'modified' => '2026.03.15. 14:32',
    ],
    [
        'id' => 1002,
        'category' => 'Sales',
        'name' => 'John Smith',
        'email' => 'john.smith@example.com',
        'description' => 'iPhone 17 128GB Titanium',
        'datetime' => '2026.02.28. 09:05',
        'date' => '2026.02.28.',
        'time' => '09:05',
        'integer' => '1 024',
        'status' => 'process',
        'status_label' => 'Processed',
        'price' => '999,00',
        'visible' => true,
        'created' => '2025.11.18. 16:40',
        'modified' => '2026.02.28. 09:05',
    ],
    [
        'id' => 1003,
        'category' => 'Marketing',
        'name' => 'Sarah Wilson',
        'email' => 'sarah.wilson@example.com',
        'description' => 'iPhone 17 Pro Max 1TB',
        'datetime' => '2026.01.10. 18:47',
        'date' => '2026.01.10.',
        'time' => '18:47',
        'integer' => '64',
        'status' => 'denied',
        'status_label' => 'Denied',
        'price' => '1 199,00',
        'visible' => false,
        'created' => '2025.09.01. 10:02',
        'modified' => '2026.01.10. 18:47',
    ],
    [
        'id' => 1004,
        'category' => 'Support',
        'name' => 'Robert Taylor',
        'email' => 'robert.taylor@example.com',
        'description' => 'Camera C430W 4K',
        'datetime' => '2025.12.03. 11:20',
        'date' => '2025.12.03.',
        'time' => '11:20',
        'integer' => '7',
        'status' => 'process',
        'status_label' => 'Processed',
        'price' => '699,00',
        'visible' => false,
        'created' => '2025.08.22. 13:55',
        'modified' => '2025.12.03. 11:20',
    ],
];
?>
						  <div class="row row-tight" style="margin-top: 16px;">
                            <div class="col-md-12">
                                <div class="card shadow" aria-labelledby="orders-title">
                                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                                        <div>
                                            <strong id="orders-title">Orders</strong>
                                            <small class="d-block">All orders, with inline actions.</small>
                                        </div>
                                        <div class="table-data__tool-right">
                                            <button type="button" class="btn btn-success">
                                            <i class="fa-solid fa-plus" aria-hidden="true"></i> Add item
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body p-0 pt-2">
                                    <div class="table-responsive">
                                        <table class="table table-data2 table-border table-hover table-striped table-custom-hover mb-0" data-table-select>
                                            <thead>
                                                <tr>
                                                    <th style="width:24px;"><label class="au-checkbox"><input type="checkbox" data-select-all aria-label="Összes kijelölése"><span class="au-checkmark"></span></label></th>
                                                    <?php if ($showRowId) : ?>
                                                    <th class="integer id-col"><a href="#">ID</a></th>
                                                    <?php endif; ?>
                                                    <th class="string"><a href="#">Category</a></th>
                                                    <th class="string"><a href="#" class="asc">Name</a></th>
                                                    <th class="email"><a href="#">Email</a></th>
                                                    <th class="string"><a href="#">Description</a></th>
                                                    <th class="datetime"><a href="#">DateTime</a></th>
                                                    <th class="date"><a href="#">Date</a></th>
                                                    <th class="time"><a href="#">Time</a></th>
                                                    <th class="integer"><a href="#">Integer</a></th>
                                                    <th class="string"><a href="#">Status</a></th>
                                                    <th class="number"><a href="#">Price</a></th>
                                                    <th class="boolean"><a href="#">Látható</a></th>
                                                    <th class="datetime-meta"><a href="#">Létrehozva</a><br><a href="#" class="asc">Módosítva</a></th>
                                                    <th class="action text-center pe-3" style="width: 1px;">Action</th>
                                                </tr>
                                            </thead>
											<tbody class="table-group-divider">
                                                <?php foreach ($listRows as $row) :
                                                    $rid = (int) $row['id'];
                                                    $cat = htmlspecialchars($row['category'], ENT_QUOTES, 'UTF-8');
                                                    $statusClass = $row['status'] === 'denied' ? 'status--denied' : 'status--process';
                                                    ?>
                                                <tr data-id="<?= $rid ?>" id="row-<?= $rid ?>">
                                                    <td class="text-center pe-3"><label class="au-checkbox"><input type="checkbox" data-select-row value="<?= $rid ?>" aria-label="Sor kijelölése"><span class="au-checkmark"></span></label></td>
                                                    <?php if ($showRowId) : ?>
                                                    <td class="integer id-col"><?= $rid ?></td>
                                                    <?php endif; ?>
                                                    <td class="string"><a href="#" class="text-decoration-none text-dark fw-bold record-link" data-bs-toggle="tooltip" title="<?= $cat ?> rekord megtekintése"><?= $cat ?> <?= icon('link-chain', 'record-link__icon') ?></a></td>
                                                    <td class="string"><?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="email"><a href="mailto:<?= htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') ?>" class="text-decoration-none text-dark fw-bold record-link"><?= htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') ?> <?= icon('mail', 'record-link__icon') ?></a></td>
                                                    <td class="string"><?= htmlspecialchars($row['description'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="datetime"><?= htmlspecialchars($row['datetime'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="date"><?= htmlspecialchars($row['date'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="time"><?= htmlspecialchars($row['time'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="integer"><?= htmlspecialchars($row['integer'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="string"><span class="<?= $statusClass ?>"><?= htmlspecialchars($row['status_label'], ENT_QUOTES, 'UTF-8') ?></span></td>
                                                    <td class="number"><?= htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="boolean"><?php if ($row['visible']) : ?><i class="fa-regular fa-eye boolean-icon boolean-icon--yes" title="Látható" aria-label="Látható"></i><?php else : ?><i class="fa-regular fa-eye-slash boolean-icon boolean-icon--no" title="Nem látható" aria-label="Nem látható"></i><?php endif; ?></td>
                                                    <td class="datetime-meta"><?= htmlspecialchars($row['created'], ENT_QUOTES, 'UTF-8') ?><br><?= htmlspecialchars($row['modified'], ENT_QUOTES, 'UTF-8') ?></td>
                                                    <td class="action text-center pe-3">
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="View"><i class="fa-regular fa-eye"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button class="item delete" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-regular fa-trash-can text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                    <div class="card-footer border-top d-flex align-items-center justify-content-between">
										<span class="small text-muted">30/2548 rekord, 2/18 oldal</span>
										
<nav aria-label="Page navigation example">
  <ul class="pagination mb-0">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#" aria-current="page">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                                    </div>
                                </div>
                            </div>
                        </div>
