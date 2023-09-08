<script>
export default{
    data:()=>({
        userEmail: null
    }),
    methods:{
        subscribeHandler(){
            console.log(this.userEmail)
        }
    }
}
</script>

<template>
    <form @submit.prevent="subscribeHandler">
        <div class="form-group">
            <label for="email">Введите ваш Email адрес</label>
            <div class="subscribe-inline mt-2">
                <input type="email" name="email" id="email" required v-model="userEmail" placeholder="example@example.com">
                <button type="submit">
                    <i class="fa fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </form>
</template>

<style lang="sass">
.subscribe-inline
    display: flex
    align-items: center
    height: 45px
    width: 100%
    & input
        width: 80%
        height: 100%
        border: 0
        border-bottom: 2px solid #03b223
        background: transparent
        transition: all .3s
        &:focus
            border: 2px solid #03b223 
            background: #fff
    & button
        width: 20%
        height: 100%
        border: 0
        background: #03b223
        & i
            color: #fff
</style>