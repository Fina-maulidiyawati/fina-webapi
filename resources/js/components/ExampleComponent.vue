<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">test API</div>

                    <div class="card-body">
                        Contoh hasil pemanggilan endpoint api
                        <p>Response:</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Dibuat Pada</th>
                            </tr>
                        </thead>
                    </table>
                        {{data}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                data: [],
                error: null  
            }          
        },
        mounted() {
            this.getData()
        },
        methods: {
            getData() {
                this.loading=true
                this.progress.start()
                axios.get('/testapi')
                .then((res) => {
                    //
                    this.data = res.data.data
                    this.loading = false
                    this.progress.finish()
                })
                .catch((error) => {
                    this.error = error.message
                    this.loading = false 
                    this.progress.fall()               
                })
            }
        }
    }
</script>
