<?php

return [

    /**
     * To extend the base Comment model one just needs to create a new
     * CustomComment model extending the Comment model shipped with the
     * package and change this configuration option to their extended model.
     */
    'model' => \EslamFaroug\LaravelComments\Comment::class,

    /**
     * You can customize the behaviour of these permissions by
     * creating your own and pointing to it here.
     */
    'permissions' => [
        'create-comment' => 'EslamFaroug\LaravelComments\CommentPolicy@create',
        'delete-comment' => 'EslamFaroug\LaravelComments\CommentPolicy@delete',
        'edit-comment' => 'EslamFaroug\LaravelComments\CommentPolicy@update',
        'reply-to-comment' => 'EslamFaroug\LaravelComments\CommentPolicy@reply',
    ],

    /**
     * The Comment Controller.
     * Change this to your own implementation of the CommentController.
     * You can use the \EslamFaroug\LaravelComments\CommentControllerInterface
     * or extend the \EslamFaroug\LaravelComments\CommentController.
     */
    'controller' => '\EslamFaroug\LaravelComments\WebCommentController',

    /**
     * Disable/enable the package routes.
     * If you want to completely take over the way this package handles
     * routes and controller logic, set this to false and provide your
     * own routes and controller for comments.
     */
    'routes' => true,

    /**
     * By default comments posted are marked as approved. If you want
     * to change this, set this option to true. Then, all comments
     * will need to be approved by setting the `approved` column to
     * `true` for each comment.
     *
     * To see only approved comments use this code in your view:
     *
     *     @comments([
     *         'model' => $book,
     *         'approved' => true
     *     ])
     *
     */
    'approval_required' => false,

    /**
     * Set this option to `true` to enable guest commenting.
     *
     * Visitors will be asked to provide their name and email
     * address in order to post a comment.
     */
    'guest_commenting' => false,

	/**
     * Set this option to `true` to enable soft deleting of comments.
     *
     * LaravelComments will be soft deleted using laravels "softDeletes" trait.
     */
    'soft_deletes' => false,

    /**
     * Enable/disable the package provider to load migrations.
     * This option might be useful if you use multiple database connections.
     */
    'load_migrations' => true,

    /**
     * Enable/disable calling Paginator::useBootstrap() in the boot method
     * to prevent breaking non bootstrap based Site.
     */
    'paginator_use_bootstrap' => true,

];
