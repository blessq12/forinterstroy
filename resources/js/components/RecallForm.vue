<script>
export default{
    props:{
        project: Object,
        page: Object
    },data:()=>({
        userData:{}
    }),methods:{
        submitHandler(){
            console.log(this.userData)
            console.log(this.project)
        }
    }
}
</script>

<template>
    <div class="project-sidebar-widget">
        <div class="header">
            <h6>Вопрос по проекту</h6>
        </div>
        <div class="content" v-if="page.type == 'project'">
            <p class="m-0" v-if="project">Если у вас возникли вопросы по проекту <b>{{ project.name }}</b> - задайте его нам!</p>
            <form @submit.prevent="submitHandler">
                <div class="form-group mt-3">
                    <label for="name">Ваше имя:</label>
                    <input type="text" class="form-control" id="name" name="name" v-model="userData.name" required>
                </div>
                <div class="form-group mt-2">
                    <label for="phone">Номер телефона:</label>
                    <input type="text" class="form-control" id="phone" name="phone" v-model="userData.phone" v-maska data-maska="+7 (###) ###-##-##" required>
                </div>
                <div class="form-group mt-2">
                    <label for="">Сообщение:</label>
                    <textarea name="message" id="message" rows="3" class="form-control" v-model="userData.message">
                        Напишите свой вопрос здесь
                    </textarea>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-success">Отправить</button>
                </div>
            </form>
        </div>
        <div class="content" v-if="page.type == 'category'">
            <p class="m-0">Если у вас возникли вопросы по категориям проектов или хотите узнать что подойдет лучше - задайте свой вопрос нам!</p>
        </div>
    </div>
</template>

<style lang="sass">

</style>