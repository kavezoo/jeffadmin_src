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

						  <div class="row row-tight" style="margin-top: 16px;">
                            <div class="col-md-12">
                                <section class="m-card" aria-labelledby="orders-title">
                                    <header class="m-card__header">
                                        <div>
                                            <h2 class="m-card__title" id="orders-title">Orders</h2>
                                            <p class="m-card__subtitle">All orders, with inline actions.</p>
                                        </div>
                                    </header>
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <div class="select-wrapper">
                                                <select class="form-select" aria-label="Filter properties">
                                                    <option selected>All properties</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                </select>
                                            </div>
                                            <div class="select-wrapper">
                                                <select class="form-select" aria-label="Time range">
                                                    <option selected>Today</option>
                                                    <option>3 days</option>
                                                    <option>1 week</option>
                                                </select>
                                            </div>
                                            <button class="au-btn-filter" type="button">
                                                <i class="fa-solid fa-filter" aria-hidden="true"></i> Filters
                                            </button>
                                        </div>
                                        <div class="table-data__tool-right">
                                            <button class="au-btn au-btn--green au-btn--small" type="button">
                                                <i class="fa-solid fa-plus" aria-hidden="true"></i> Add item
                                            </button>
                                            <div class="select-wrapper">
                                                <select class="form-select" aria-label="Export">
                                                    <option selected>Export</option>
                                                    <option>CSV</option>
                                                    <option>Excel</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-data2 table-border table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:24px;"><label class="au-checkbox"><input type="checkbox" aria-label="Select all"><span class="au-checkmark"></span></label></th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Description</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th style="width: 1px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                    <td>Lori Lynch</td>
                                                    <td><a class="block-email" href="#">lori@example.com</a></td>
                                                    <td>Samsung Galaxy S25 Ultra</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--process">Processed</span></td>
                                                    <td>$679.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Send"><i class="fa-solid fa-paper-plane"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                    <td>John Smith</td>
                                                    <td><a class="block-email" href="#">john@example.com</a></td>
                                                    <td>iPhone 17 128GB Titanium</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--process">Processed</span></td>
                                                    <td>$999.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Send"><i class="fa-solid fa-paper-plane"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                    <td>Sarah Wilson</td>
                                                    <td><a class="block-email" href="#">sarah@example.com</a></td>
                                                    <td>iPhone 17 Pro Max 1TB</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--denied">Denied</span></td>
                                                    <td>$1,199.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Send"><i class="fa-solid fa-paper-plane"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label></td>
                                                    <td>Robert Taylor</td>
                                                    <td><a class="block-email" href="#">robert@example.com</a></td>
                                                    <td>Camera C430W 4k</td>
                                                    <td>Jan 15, 14:32</td>
                                                    <td><span class="status--process">Processed</span></td>
                                                    <td>$699.00</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Send"><i class="fa-solid fa-paper-plane"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></button>
                                                            <button class="item" type="button" data-bs-toggle="tooltip" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>