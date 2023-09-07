<script>
export default{
    props:{
        project: Object,
        page: Object,
        category: Object
    },data:()=>({
        userData:{},
        pageType: null
    }),methods:{
        submitHandler(){
            if(this.page.type == 'project'){
                console.log(this.userData)
                console.log(this.project)
            }
            if (this.page.type == 'category'){
                console.log(this.userData)
                console.log(this.category)
            }
        }
    }
}
</script>

<template>
    <div class="project-sidebar-widget position-sticky" style="top: 82px;">
        <div class="header">
            <h6 v-if="page.type == 'slug'">Вопрос по услуге</h6>
            <h6 v-if="page.type == 'slug-category'">Вопрос по услугам</h6>
            <h6 v-if="page.type == 'project'">Вопрос по проекту</h6>
            <h6 v-if="page.type == 'category'">Вопрос по строительству</h6>
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
                    <button type="submit
                    ">Отправить</button>
                </div>
            </form>
        </div>
        <div class="content" v-if="page.type == 'category'">
            <p class="m-0">Если у вас возникли вопросы по категориям проектов или хотите узнать что подойдет лучше - задайте свой вопрос нам!</p>
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
                    <button type="submit">Отправить</button>
                </div>
            </form>
        </div>
        <div class="content" v-if="page.type == 'slug'">
            <p class="m-0">Если вы не нашли ответ на свой вопрос - напишите нам и мы ответим на все вопросы!</p>
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
                    <button type="submit">Отправить</button>
                </div>
            </form>
        </div>
        <div class="content" v-if="page.type == 'slug-category'">
            <p class="m-0">Не нашли нужную вам услугу - напишите нам и мы ответим на ваши вопросы!</p>
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
                    <button type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</template>

<style lang="sass">
.project-sidebar-widget
    & .content
        & form
            & button[type=submit]
                height: 40px
                width: 160px
                border: none
                background: #03b223
                color: #fff
                
</style>