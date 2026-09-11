                        <div class="row row-tight" style="margin-top: 16px;">
                            <div class="col-md-10">

                                <form action="#" method="post" onsubmit="return false" enctype="multipart/form-data" class="form-horizontal">
                                <div class="card shadow" aria-labelledby="basic-form-title">

                                        <div class="card-header form-card-header">
                                            <div class="form-card-header__title">
                                                <strong id="basic-form-title">Add New</strong>
                                                <small class="d-block">Order item</small>
                                            </div>

                                            <ul class="nav nav-tabs card-header-tabs form-card-header__tabs" id="formTabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="tab-basic-btn" data-bs-toggle="tab" href="#tab-basic" role="tab" aria-controls="tab-basic" aria-current="page" aria-selected="true">Alapadatok</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="tab-details-btn" data-bs-toggle="tab" href="#tab-details" role="tab" aria-controls="tab-details" aria-selected="false">Részletek</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="tab-megjegyzes-btn" data-bs-toggle="tab" href="#tab-megjegyzes" role="tab" aria-controls="tab-megjegyzes" aria-selected="false">Megjegyzés</a>
                                                </li>
                                                <li class="nav-item ms-auto" role="presentation">
                                                    <a class="nav-link" id="tab-settings-btn" data-bs-toggle="tab" href="#tab-settings" role="tab" aria-controls="tab-settings" aria-selected="false">Beállítások</a>
                                                </li>
                                            </ul>

                                            <a href="#" class="m-btn m-btn--ghost form-card-header__close" style="padding: 0 10px;" aria-label="Bezárás" title="Bezárás">
                                                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                        <div class="card-body form-card-body">
                                            <div class="tab-content">

                                                <div class="tab-pane fade show active" id="tab-basic" role="tabpanel" aria-labelledby="tab-basic-btn" tabindex="0">

                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label for="select" class="form-control-label fw-bold">Select:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="select-with-action">
                                                                <select name="select" id="select" class="form-select" data-tom-select>
                                                                    <option value="">Please select</option>
                                                                    <option value="1">Option #1</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                    <option value="4">Option #4</option>
                                                                    <option value="5">Option #5</option>
                                                                    <option value="6">Option #6</option>
                                                                    <option value="7">Option #7</option>
                                                                    <option value="8">Option #8</option>
                                                                    <option value="9">Option #9</option>
                                                                    <option value="10">Option #10</option>
                                                                    <option value="11">Option #11</option>
                                                                    <option value="12">Option #12</option>
                                                                    <option value="13">Option #13</option>
                                                                    <option value="14">Option #14</option>
                                                                    <option value="15">Option #15</option>
                                                                </select>
                                                                <button type="button" class="btn btn-outline-secondary select-with-action__btn" aria-label="További lehetőségek" title="További lehetőségek">
                                                                    <i class="fa-solid fa-ellipsis" aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label for="text-input" class="form-control-label fw-bold">Text Input:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="is-invalid form-control" autofocus>
                                                        </div>
                                                        <div class="col-12 offset-md-2">
                                                            <small class="form-text fw-bold text-danger">This is an error text</small>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 align-items-start">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label for="textarea-input" class="form-control-label fw-bold">Textarea:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label for="file-input" class="form-control-label fw-bold">File Input:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="file-picker">
                                                                <input type="file" id="file-input" name="file-input" class="file-picker__input">
                                                                <label for="file-input" class="file-picker__control">
                                                                    <span class="file-picker__btn">
                                                                        <i class="fa-regular fa-folder-open" aria-hidden="true"></i>
                                                                        Browse
                                                                    </span>
                                                                    <span class="file-picker__name" data-file-name>No file chosen</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="tab-details" role="tabpanel" aria-labelledby="tab-details-btn" tabindex="0">
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label for="selectLg" class="form-control-label fw-bold">Select Large:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <div class="select-with-action">
                                                                <select name="selectLg" id="selectLg" class="form-select" data-tom-select>
                                                                    <option value="">Please select</option>
                                                                    <option value="1">Option #1</option>
                                                                    <option value="2">Option #2</option>
                                                                    <option value="3">Option #3</option>
                                                                    <option value="4">Option #4</option>
                                                                    <option value="5">Option #5</option>
                                                                    <option value="6">Option #6</option>
                                                                    <option value="7">Option #7</option>
                                                                    <option value="8">Option #8</option>
                                                                    <option value="9">Option #9</option>
                                                                    <option value="10">Option #10</option>
                                                                    <option value="11">Option #11</option>
                                                                    <option value="12">Option #12</option>
                                                                    <option value="13">Option #13</option>
                                                                    <option value="14">Option #14</option>
                                                                    <option value="15">Option #15</option>
                                                                </select>
                                                                <button type="button" class="btn btn-outline-secondary select-with-action__btn" aria-label="További lehetőségek" title="További lehetőségek">
                                                                    <i class="fa-solid fa-ellipsis" aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label class="form-control-label fw-bold mb-0">Inline Checkboxes:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9 d-flex align-items-center flex-wrap pt-1">
                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">
                                                                <label for="inline-checkbox1" class="form-check-label">One</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">
                                                                <label for="inline-checkbox2" class="form-check-label">Two</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">
                                                                <label for="inline-checkbox3" class="form-check-label">Three</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="tab-megjegyzes" role="tabpanel" aria-labelledby="tab-megjegyzes-btn" tabindex="0">
                                                    <div class="form-wysiwyg">
                                                        <textarea id="megjegyzes" name="megjegyzes" class="form-wysiwyg__editor" aria-label="Megjegyzés"></textarea>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="tab-settings-btn" tabindex="0">
                                                    <section class="form-section">
                                                        <h5 class="form-section__title">A rekord beállításai</h5>

                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label for="visible" class="form-control-label fw-bold mb-0">Visible:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9 d-flex align-items-center flex-wrap pt-1">
                                                            <div class="form-check form-check-inline mb-0">
                                                                <input type="checkbox" id="visible" name="visible" value="1" class="form-check-input" checked>
                                                                <label for="visible" class="form-check-label">Látható</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-2 text-start text-md-end">
                                                            <label for="pos" class="form-control-label fw-bold">Pos:</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="number" id="pos" name="pos" value="1000" class="form-control" min="0" step="1">
                                                        </div>
                                                    </div>
                                                    </section>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-footer border-top">
                                            <div class="offset-md-2">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa-regular fa-dot-circle"></i> Save
                                                </button>
                                                <button type="reset" class="btn btn-secondary">
                                                    <i class="fa-solid fa-ban"></i> Cancel
                                                </button>
                                            </div>
                                        </div>

                                </div>
                                </form>
                            </div>
                        </div>
