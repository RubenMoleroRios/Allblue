<?php
//General
define(constant_name: "proyectName", value: "allBlue");
define(constant_name: "url_base", value: "http://localhost/");

//Admin
define(constant_name: "url_base_admin", value: url_base . "admin/");
define(constant_name: "url_login_admin", value: url_base . "admin/view/auth/login-view.php");

define(constant_name: "url_articles_list_admin", value: url_base . "admin/view/article/list-article-view.php");
define(constant_name: "url_articles_add_admin", value: url_base . "admin/view/article/add-article-view.php");
define(constant_name: "url_articles_update_admin", value: url_base . "admin/view/article/update-article-view.php");

define(constant_name: "url_order_list_admin", value: url_base . "admin/view/order/list-order-view.php");
define(constant_name: "url_order_add_admin", value: url_base . "admin/view/order/add-order-view.php");
define(constant_name: "url_order_update_admin", value: url_base . "admin/view/order/update-order-view.php");

define(constant_name: "url_type_list_admin", value: url_base . "admin/view/type/list-type-view.php");
define(constant_name: "url_type_add_admin", value: url_base . "admin/view/type/add-type-view.php");
define(constant_name: "url_type_update_admin", value: url_base . "admin/view/type/update-type-view.php");

define(constant_name: "url_user_list_admin", value: url_base . "admin/view/user/list-user-view.php");
define(constant_name: "url_user_add_admin", value: url_base . "admin/view/user/add-user-view.php");
define(constant_name: "url_user_update_admin", value: url_base . "admin/view/user/update-user-view.php");

define(constant_name: "controller_action_index_admin", value: url_base . "Article/indexAdmin");
define(constant_name: "controller_action_article_list_admin", value: url_base . "Article/viewAdminList");
define(constant_name: "controller_action_article_view_add_admin", value: url_base . "Article/viewAdminAdd");
define(constant_name: "controller_action_article_view_update_admin", value: url_base . "Article/viewAdminUpdate");
define(constant_name: "controller_action_article_add_admin", value: url_base . "Article/addArticle");
define(constant_name: "controller_action_article_delete_admin", value: url_base . "Article/deleteArticle");
define(constant_name: "controller_action_article_update_admin", value: url_base . "Article/updateArticle");

define(constant_name: "controller_action_review_list_admin", value: url_base . "Review/viewAdminList");
define(constant_name: "controller_action_review_view_add_admin", value: url_base . "Review/viewAdminAdd");
define(constant_name: "controller_action_review_view_update_admin", value: url_base . "Review/viewAdminUpdate");
define(constant_name: "controller_action_review_add_admin", value: url_base . "Review/addReviewAdmin");
define(constant_name: "controller_action_review_delete_admin", value: url_base . "Review/deleteReview");
define(constant_name: "controller_action_review_update_admin", value: url_base . "Review/updateReview");

define(constant_name: "controller_action_order_list_admin", value: url_base . "Order/viewAdminList");
define(constant_name: "controller_action_order_view_add_admin", value: url_base . "Order/viewAdminAdd");
define(constant_name: "controller_action_order_view_update_admin", value: url_base . "Order/viewAdminUpdate");
define(constant_name: "controller_action_order_add_admin", value: url_base . "Order/addOrder");
define(constant_name: "controller_action_order_delete_admin", value: url_base . "Order/deleteOrder");
define(constant_name: "controller_action_order_update_admin", value: url_base . "Order/updateOrder");

define(constant_name: "controller_action_type_list_admin", value: url_base . "Type/viewAdminList");
define(constant_name: "controller_action_type_view_add_admin", value: url_base . "Type/viewAdminAdd");
define(constant_name: "controller_action_type_view_update_admin", value: url_base . "Type/viewAdminUpdate");
define(constant_name: "controller_action_type_add_admin", value: url_base . "Type/AddType");
define(constant_name: "controller_action_type_delete_admin", value: url_base . "Type/deleteType");
define(constant_name: "controller_action_type_update_admin", value: url_base . "Type/updateType");

define(constant_name: "controller_action_user_list_admin", value: url_base . "User/viewAdminList");
define(constant_name: "controller_action_user_view_add_admin", value: url_base . "User/viewAdminAdd");
define(constant_name: "controller_action_user_view_update_admin", value: url_base . "User/viewAdminUpdate");
define(constant_name: "controller_action_user_add_admin", value: url_base . "User/addUser");
define(constant_name: "controller_action_user_delete_admin", value: url_base . "User/deleteUser");
define(constant_name: "controller_action_user_update_admin", value: url_base . "User/updateUser");

//Shop
define(constant_name: "url_base_shop", value: url_base . "shop/");
define(constant_name: "url_login_shop", value: url_base . "shop/view/auth/login-view.php");
define(constant_name: "url_register_shop", value: url_base . "shop/view/auth/register-view.php");

define(constant_name: "controller_action_index_shop", value: url_base . "Article/indexShop");
define(constant_name: "controller_action_register_shop", value: url_base . "User/registerClient");
define(constant_name: "controller_action_article_list_shop", value: url_base . "Article/viewShopList");
define(constant_name: "controller_action_user_register_shop", value: url_base . "User/registerClient");

define(constant_name: "controller_action_add_carrito_shop", value: url_base . "Carrito/add");
define(constant_name: "controller_action_list_carrito_shop", value: url_base . "Carrito/index");
define(constant_name: "controller_action_carrito_end_view_shop", value: url_base . "Carrito/vistaFinalizarCarrito");
define(constant_name: "controller_action_carrito_end_shop", value: url_base . "Carrito/endCarritoShop");
define(constant_name: "controller_action_delete_article_carrito_shop", value: url_base . "Carrito/deleteArticle");

define(constant_name: "controller_action_add_review_shop", value: url_base . "Review/addReview");
