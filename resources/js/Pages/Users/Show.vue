<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                You are in the <i class="text-green-400">{{user.name}}</i> Profile page 
            </h2>
        </template>

        <div class="py-2">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <div class="mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <img class="object-cover object-center w-full h-56" :src="user.profile_photo_url" alt="avatar">
                        
                        <div class="flex items-center px-6 py-3 bg-gray-900">
                            <i class="icofont-cop-badge text-lg text-white"></i>
                            <h1 class="mx-3 text-lg font-semibold text-white" v-if="user.role==1">
                                Admin
                            </h1>
                            <h1 class="mx-3 text-lg font-semibold text-white" v-if="user.role==0">
                                User
                            </h1>
                        </div>

                        <div class="px-6 py-4">
                            <h1 class="text-xl font-semibold text-gray-800 dark:text-white">{{user.name}}</h1>

                            <p class="py-2 text-gray-700 dark:text-gray-400">{{user.title}} / <span class="text-sm font-bold">{{user.sub_title}}.</span></p>
                            
                            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                <i class="icofont-user-alt-4 text-xl"></i>
                                <h1 class="px-2 text-sm">User since: <span class="font-semibold">{{ (user.created_at) }}</span></h1>
                            </div>
                            
                            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                <i class="icofont-law-document text-xl"></i>
                                <h1 class="px-2 text-sm">Last update: <span class="font-semibold">{{ (user.updated_at) }}</span></h1>
                            </div>

                            <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                <i class="icofont-email text-xl"></i>
                                <h1 class="px-2 text-sm">{{user.email}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    //import moment from 'moment'
    export default {
        components: {
            AppLayout,
        },
        props:{
            user:Object,
        },
        methods:{
        }
        
    }
</script>
