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
                            <form @submit.prevent="excelImport()">
                                <div class="form-group">
                                    <div class="form-group" style="margin: 10px">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" accept=".xlsx" >
                                            </div>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-default waves-effect waves-themed" type="submit" id="inputGroupFileAddon04">Import CSV</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form @submit.prevent="excelExport()">
                                <div class="form-group">
                                    <div class="form-group" style="margin: 10px">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-default waves-effect waves-themed" type="submit" >Export CSV</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <nuxt-link to="/news/create">
                                <button class="btn btn-primary btn-sm" data-toggle="dropdown">Add Article</button>
                            </nuxt-link>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100"
                                   v-if="ListArticle">
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
    methods:{
        excelExport() {
            let uri = '/export-csv';
            this.$axios.post(uri).then((response) => {
            });
            console.log(uri);
        },
        excelImport() {
            let uri = '/import-csv';
            this.$axios.post(uri).then((response) => {
            });
        },
    }
};
</script>
