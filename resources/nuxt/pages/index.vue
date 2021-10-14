<template>
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
            <li class="breadcrumb-item">Datatables</li>
            <li class="breadcrumb-item active">Basic</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            News <span class="fw-300"><i>Table</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <nuxt-link to="/news/create">
                                <button class="btn btn-primary btn-sm" data-toggle="dropdown">Add Article</button>
                            </nuxt-link>
                            <div
                                class="dropdown-menu dropdown-menu-animated dropdown-menu-right position-absolute pos-top">
                                <button class="dropdown-item active" data-action="toggle" data-class="table-bordered"
                                        data-target="#dt-basic-example"> Bordered Table
                                </button>
                                <button class="dropdown-item" data-action="toggle" data-class="table-sm"
                                        data-target="#dt-basic-example"> Smaller Table
                                </button>
                                <button class="dropdown-item" data-action="toggle" data-class="table-dark"
                                        data-target="#dt-basic-example"> Table Dark
                                </button>
                                <button class="dropdown-item active" data-action="toggle" data-class="table-hover"
                                        data-target="#dt-basic-example"> Table Hover
                                </button>
                                <button class="dropdown-item active" data-action="toggle" data-class="table-stripe"
                                        data-target="#dt-basic-example"> Table Stripped
                                </button>
                                <div class="dropdown-divider m-0"></div>
                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        tbody color
                                    </div>
                                    <div class="dropdown-menu no-transition-delay">
                                        <div
                                            class="js-tbody-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                            style="width: 15.9rem; padding: 0.5rem">
                                            <a href="javascript:void(0);" data-bg="bg-primary-100"
                                               class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-200"
                                               class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-300"
                                               class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-400"
                                               class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-500"
                                               class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-600"
                                               class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-700"
                                               class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-800"
                                               class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-900"
                                               class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-100"
                                               class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-200"
                                               class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-300"
                                               class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-400"
                                               class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-500"
                                               class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-600"
                                               class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-700"
                                               class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-800"
                                               class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-900"
                                               class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-100"
                                               class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-200"
                                               class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-300"
                                               class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-400"
                                               class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-500"
                                               class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-600"
                                               class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-700"
                                               class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-800"
                                               class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-900"
                                               class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-100"
                                               class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-200"
                                               class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-300"
                                               class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-400"
                                               class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-500"
                                               class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-600"
                                               class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-700"
                                               class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-800"
                                               class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-900"
                                               class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-100"
                                               class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-200"
                                               class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-300"
                                               class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-400"
                                               class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-500"
                                               class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-600"
                                               class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-700"
                                               class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-800"
                                               class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-900"
                                               class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                               class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                               class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                               class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                               class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                               class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                               class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                               class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                               class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                               class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg=""
                                               class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        thead color
                                    </div>
                                    <div class="dropdown-menu no-transition-delay">
                                        <div
                                            class="js-thead-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                            style="width: 15.9rem; padding: 0.5rem">
                                            <a href="javascript:void(0);" data-bg="bg-primary-100"
                                               class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-200"
                                               class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-300"
                                               class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-400"
                                               class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-500"
                                               class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-600"
                                               class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-700"
                                               class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-800"
                                               class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-900"
                                               class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-100"
                                               class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-200"
                                               class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-300"
                                               class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-400"
                                               class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-500"
                                               class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-600"
                                               class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-700"
                                               class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-800"
                                               class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-900"
                                               class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-100"
                                               class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-200"
                                               class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-300"
                                               class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-400"
                                               class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-500"
                                               class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-600"
                                               class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-700"
                                               class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-800"
                                               class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-900"
                                               class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-100"
                                               class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-200"
                                               class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-300"
                                               class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-400"
                                               class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-500"
                                               class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-600"
                                               class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-700"
                                               class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-800"
                                               class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-900"
                                               class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-100"
                                               class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-200"
                                               class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-300"
                                               class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-400"
                                               class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-500"
                                               class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-600"
                                               class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-700"
                                               class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-800"
                                               class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-900"
                                               class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                               class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                               class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                               class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                               class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                               class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                               class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                               class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                               class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                               class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg=""
                                               class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                               style="margin:1px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100" v-if="ListArticle">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th style="width: 200px">Title</th>
                                    <th>Thumbnail</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody v-for="(article,index) in ListArticle.data" :key="index">
                                <tr>
                                    <td>{{ article.id }}</td>
                                    <td>{{ article.title }}</td>
                                    <td>
                                        <img :src="article.thumbnail" width="100px" :alt="article.title">
                                    </td>
                                    <td>{{ article.category }}</td>
                                    <td>
                                        <span v-html="article.description"></span>
                                    </td>
                                    <td>{{ article.created_at }}</td>
                                    <td>
                                        <nuxt-link :to="'/news/update/'+article.id">
                                            update
                                        </nuxt-link>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- datatable end -->
                            <div v-if="!ListArticle">
                                null data
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    async asyncData({app}) {
        const ListArticle = await app.$axios.$get('api/me');
        return {ListArticle};
    },
};
</script>
