<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2019/4/7
 * Time: 17:14
 */
if (!function_exists('isContent')) {
    function isContent($route)
    {
        $data = [
            'adminCategoryIndex',
            'adminCategoryCreate',
            'adminCategoryEdit',
            'adminCategoryStore',
            'adminCategoryUpdate',
            'adminCategoryDestory',
            'adminArticleIndex',
            'adminArticleCreate',
            'adminArticleEdit',
            'adminArticleStore',
            'adminArticleUpdate',
            'adminArticleDestory',
            'adminTagIndex',
            'adminTagEdit',
            'adminTagCreate',
            'adminTagStore',
            'adminTagUpdate',
            'adminTagDestory',
            'adminCommentIndex',
            'adminCommentCreate',
            'adminCommentEdit',
            'adminCommentStore',
            'adminCommentUpdate',
            'adminCommentDestory',
            'adminAdvertIndex',
            'adminAdvertCreate',
            'adminAdvertEdit',
            'adminAdvertStore',
            'adminAdvertUpdate',
            'adminAdvertDestory',
            'adminMottoIndex',
            'adminMottoCreate',
            'adminMottoEdit',
            'adminMottoStore',
            'adminMottoUpdate',
            'adminMottoDestory',
            'adminMediaIndex',
            'adminMediaUpload',
            'adminMediaEdit',
            'adminMediaStore',
            'adminMediaUpdate',
            'adminMediaDestory'
        ];
        return in_array($route, $data);
    }
}

if (!function_exists('isCategory')) {
    function isCategory($route)
    {
        $data = [
            'adminCategoryIndex',
            'adminCategoryCreate',
            'adminCategoryEdit',
            'adminCategoryStore',
            'adminCategoryUpdate',
            'adminCategoryDestory'
        ];
        return in_array($route, $data);
    }
}

if (!function_exists('is_artilce')) {
    function isArticle($route)
    {
        $data = [
            'adminArticleIndex',
            'adminArticleCreate',
            'adminArticleEdit',
            'adminArticleStore',
            'adminArticleUpdate',
            'adminArticleDestory'
        ];
        return in_array($route, $data);
    }
}

if (!function_exists('isTag')) {
    function isTag($route)
    {
        $data = [
            'adminTagIndex',
            'adminTagCreate',
            'adminTagEdit',
            'adminTagStore',
            'adminTagUpdate',
            'adminTagDestory'
        ];
        return in_array($route, $data);
    }
}

if (!function_exists('isComment')) {
    function isComment($route)
    {
        $data = [
            'adminCommentIndex',
            'adminCommentCreate',
            'adminCommentEdit',
            'adminCommentStore',
            'adminCommentUpdate',
            'adminCommentDestory'
        ];
        return in_array($route, $data);
    }
}

if (!function_exists('isAdvert')) {
    function isAdvert($route)
    {
        $data = [
            'adminAdvertIndex',
            'adminAdvertCreate',
            'adminAdvertEdit',
            'adminAdvertStore',
            'adminAdvertUpdate',
            'adminAdvertDestory'
        ];
        return in_array($route, $data);
    }
}

if (!function_exists('isMotto')) {
    function isMotto($route)
    {
        $data = [
            'adminMottoIndex',
            'adminMottoCreate',
            'adminMottoEdit',
            'adminMottoStore',
            'adminMottoUpdate',
            'adminMottoDestory'
        ];
        return in_array($route, $data);
    }
}

if (!function_exists('isMedia')) {
    function isMedia($route)
    {
        $data = [
            'adminMediaIndex',
            'adminMediaUpload',
            'adminMediaEdit',
            'adminMediaStore',
            'adminMediaUpdate',
            'adminMediaDestory'
        ];
        return in_array($route, $data);
    }
}


