<template>
    <div class="d-flex justify-content-between flex-wrap flex-mdnowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <router-link :to="{ name: 'penulis.create' }" class="btn btn-md btn-success">TAMBAH PENULIS</router-link>
                        <table class="table table-striped table-bordered mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><center>NAMA Penulis</center></th>
                                    <th scope="col"><center>Tanggal Lahir</center></th>
                                    <th scope="col"><center>Deskripsi</center></th>
                                    <th scope="col"><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(penulis, id) in penulis" :key="id">
                                    <td><center>{{ penulis.nama }}</center></td>
                                    <td><center>{{ penulis.tanggal_lahir }}</center></td>
                                    <td><center>{{ penulis.deskripsi }}</center></td>
                                    <td class="text-center">
                                        <router-link :to="{ name:
                                        'penulis.update', params: { id: penulis.id } }" class="btn
                                        btn-sm btn-primary mr-1">
                                        EDIT</router-link>
                                        <button class="btn btn-sm btn-danger ml-1" @click="postDelete(penulis.id)">DELETE</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>
<script>
import axios from 'axios'
import { onMounted, ref } from 'vue'
import { useRouter } from 'vue-router'
export default {
    setup() {
        //reactive state
        let penulis = ref([])
        const validation = ref([])
        const router = useRouter()
        //mounted
        onMounted(() => {
            //get API from Laravel Backend
            axios.get('http://127.0.0.1:8000/api/penulis')
                .then(response => {
                    //assign state posts with response data
                    penulis.value = response.data.data
                }).catch(error => {
                    console.log(error.response.data)
                })
        })

        function postDelete(id){
            axios.delete(`http://localhost:8000/api/penulis/${id}`,{
                }).then(()=>{
                    router.push({
                        name: 'penulis.index'
                    })
                }).catch(error =>{
                    validation.value = error.response.data
                })
            }
        //return
        return {
            penulis,
            postDelete
        }
    },

    methods: {
        deleteFromRow(id) {
        axios.delete(`http://localhost:8000/api/penulis/${id}`)
            .then(() => {
               const index = this.penulis.findIndex(penulis => penulis.id === id)
                if(index){
                    this.penulis.splice(id, 1)
                } 
            }).catch(error => {
                console.log(error.response.data)
            })
        this.penulis.splice(id, 1);
        }
    }       
}
</script>

<style>

</style>