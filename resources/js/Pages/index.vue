<script setup>
defineProps({customers: Array})
import {router} from "@inertiajs/vue3";

function destroy(id) {
    router.delete(`/customers/${id}`)
}
function edit(id) {
    router.get(`/customers/${id}/edit`)
}
</script>

<template>
  <br><br>
    <div class="card col-5 offset-3">
      <div v-if="$page.props.flash.message" class="alert alert-success">
        <strong>{{$page.props.flash.message}}</strong>
      </div>
        <table class="table table-bordered table-hover table-sm">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers">
                    <td>{{customer.name}}</td>
                    <td>
                        <button class="btn btn-outline-info">View</button>
                        <button @click.prevent="edit(customer.id)" class="btn btn-outline-primary">Edit</button>
                        <button @click.prevent="destroy(customer.id)" class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
