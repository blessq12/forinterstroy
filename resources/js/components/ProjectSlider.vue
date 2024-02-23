<script>
import { onMounted } from 'vue';

export default{
    props:{
        project: Object
    },mounted(){
        this.thumbnails.push(
            { id: 1, imageUrl: this.project.image_thumb_1},
            { id: 2, imageUrl: this.project.image_thumb_2},
            { id: 3, imageUrl: this.project.image_thumb_3},
            { id: 4, imageUrl: this.project.image_thumb_4}
        )
        this.imagePath = this.project.image_full_1.replace('1.jpg', '')
    },data:()=>({
        thumbnails:[],
        imagePath: null,
        currentIndex: 1
    }),watch:{
       
    }
}
</script>

<template>
<div class="project-slider">
    <div class="slider-item">
        <img :src=" imagePath + currentIndex +'.jpg'" alt="">
    </div>
    <div class="thumbnails">
        <ul>
            <li 
                v-for="thumb in this.thumbnails" 
                :key="thumb.id" 
                :style="'background:url('+ thumb.imageUrl +');'"
                @click="currentIndex = thumb.id"    
            >
            </li>
        </ul>
    </div>
</div>
</template>

<style lang="sass">
.project-slider
    width: 100%
    & img
        width: 100%
    & .thumbnails
        padding-top: 24px
        & ul
            list-style: none
            padding: 0
            margin: 0
            display: flex
            align-items: center
            & li
                height: 40px
                width: 40px
                margin-right: 12px
                background-position: center !important
                background-size: cover !important
                background-repeat: no-repeat !important

</style>