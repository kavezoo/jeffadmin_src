<?php /*
                        <!-- Page header -->
                        <div class="page-header">
                            <div>
                                <h1>Tables</h1>
                                <p class="subtitle">Modern data tables with sortable columns, status badges, and inline row actions.</p>
                            </div>
                            <div class="page-header__actions">
                                <button type="button" class="m-btn m-btn--ghost">
                                    <i class="fa-solid fa-download" aria-hidden="true"></i>
                                    Export
                                </button>
                                <button type="button" class="m-btn m-btn--primary">
                                    <i class="fa-solid fa-plus" aria-hidden="true"></i>
                                    Add row
                                </button>
                            </div>
                        </div>
*/ ?>
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
                                            <!--div class="select-wrapper">
                                                <select class="form-select" aria-label="Export">
                                                    <option selected>Export</option>
                                                    <option>CSV</option>
                                                    <option>Excel</option>
                                                </select>
                                            </div-->
                                        </div>
                                    </div>

                                    <div class="card-body p-0 pt-2">
                                    <div class="table-responsive">
                                        <table class="table table-data2 table-border table-hover table-striped table-custom-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:24px;"><label class="au-checkbox"><input type="checkbox" aria-label="Select all"><span class="au-checkmark"></span></label></th>
                                                    <th><a href="#" class="desc">Category</a></th>
                                                    <th><a href="#" class="desc">Name</a></th>
                                                    <th><a href="#" class="desc">Email</a></th>
                                                    <th><a href="#" class="asc">Description</a></th>
                                                    <th><a href="#" class="desc">Date</a></th>
                                                    <th><a href="#" class="asc">Status</a></th>
                                                    <th><a href="#" class="asc">Price</a></th>
                                                    <th class="action text-center pe-4" style="width: 1px;">Action</th>
                                                </tr>
                                            </thead>
											<tbody class="table-group-divider">
                                                <tr>
                                                    <td class="text-center pe-3"><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                    <td><a href="#" class="text-decoration-none text-dark fw-bold record-link" data-bs-toggle="tooltip" title="Administration rekord megtekintése">Administration <?= icon('link-chain', 'record-link__icon') ?></a></td>
                                                    <td>Gipsz Jakab</td>
                                                    <td>lori@example.com</td>
                                                    <td>Samsung Galaxy S25 Ultra</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--process">Processed</span></td>
                                                    <td>$679.00</td>
                                                    <td class="text-center px-3">
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="View"><i class="fa-regular fa-eye"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button class="item delete" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-regular fa-trash-can text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td class="text-center pe-3"><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                <td><a href="#" class="text-decoration-none text-dark fw-bold record-link" data-bs-toggle="tooltip" title="Administration rekord megtekintése">Administration <?= icon('link-chain', 'record-link__icon') ?></a></td>
                                                    <td>John Smith</td>
                                                    <td><a class="block-email" href="#">john@example.com</a></td>
                                                    <td>iPhone 17 128GB Titanium</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--process">Processed</span></td>
                                                    <td>$999.00</td>
                                                    <td class="text-center px-3">
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="View"><i class="fa-regular fa-eye"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button class="item delete" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-regular fa-trash-can text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center pe-3"><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                    <td><a href="#" class="text-decoration-none text-dark fw-bold record-link" data-bs-toggle="tooltip" title="Administration rekord megtekintése">Administration <?= icon('link-chain', 'record-link__icon') ?></a></td>
                                                    <td>Sarah Wilson</td>
                                                    <td><a class="block-email" href="#">sarah@example.com</a></td>
                                                    <td>iPhone 17 Pro Max 1TB</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--denied">Denied</span></td>
                                                    <td>$1,199.00</td>
                                                    <td class="text-center px-3">
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="View"><i class="fa-regular fa-eye"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button class="item delete" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-regular fa-trash-can text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center pe-3"><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                    <td><a href="#" class="text-decoration-none text-dark fw-bold record-link" data-bs-toggle="tooltip" title="Administration rekord megtekintése">Administration <?= icon('link-chain', 'record-link__icon') ?></a></td>
                                                    <td>Robert Taylor</td>
                                                    <td><a class="block-email" href="#">robert@example.com</a></td>
                                                    <td>Camera C430W 4k</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--process">Processed</span></td>
                                                    <td>$699.00</td>
                                                    <td class="text-center px-3">
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="View"><i class="fa-regular fa-eye"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button class="item delete" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-regular fa-trash-can text-danger"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
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
