<template>
    <el-container>
        <el-header style="padding:0;">
            <el-row>
                <el-menu
                        :default-active="activeIndex"
                        class="el-menu-demo"
                        mode="horizontal"
                        @select="handleSelect"
                        background-color="#545c64"
                        text-color="#fff"
                        active-text-color="#ffd04b"
                        router="true"
                        >
                    <el-col :span="8" :offset="6">

                        <el-menu-item index="/">首页</el-menu-item>

                        <el-menu-item index="/about">帮助</el-menu-item>
                    </el-col>
                    <el-col :span="4">
                        <el-menu-item index="/register" style="float:right">注册</el-menu-item>
                        <el-menu-item index="/login" style="float:right;">登录</el-menu-item>
                    </el-col>
                </el-menu>
            </el-row>
        </el-header>
        <el-main>
            <router-view></router-view>
        </el-main>
        <el-footer id="footer" style="height:2em;text-align:center;width:100%;background:rgba(255,255,255,0.2);">
            copyright © 2018 ***版权所有
        </el-footer>
    </el-container>
</template>
<script>
    export default {
        data() {
            return {
                activeIndex: '/',
                activeIndex2: '1'
            };
        },
        methods: {
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            }
        },
        mounted() {

        },
    }
</script>

<style>
    body{
        background-image: url(../../img/bg.gif);
        font-family:"微软雅黑",sans-serif;
    }
    .title{
        font-weight:100;
        text-align: center;
    }
    #footer{
        text-align:center;
        position: absolute;
        bottom:0;
        height:2em;
        line-height:2em;
    }
</style>