<script>
export default{
    props:{
        project: Object
    }
}
</script>

<template>
    <div class="project-sidebar-widget">
        <div class="header">
            <h6>Вопрос по проекту</h6>
        </div>
        <div class="content">
            <p class="m-0" v-if="project">Если у вас есть вопросы по проекту <b>{{ project.name }}</b> </p>
            
        </div>
    </div>
</template>

<style lang="sass">

</style>