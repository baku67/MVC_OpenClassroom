<?php

    $post = [
        'title' => "Titre exemple",
        'french_creation_date' => '03/12/1996 à 04:20',
        'content' => 'Contenu du post,Contenu du post, Contenu du post, Contenu du post, Contenu du post,Contenu du post',
    ];

    $comments = [
        [
            'author' => 'Bob Lennon',
            'french_creation_date' => '03/15/1554 12:45',
            'comment' => 'CommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaire'
        ],
        [
            'author' => 'Bob Lennon',
            'french_creation_date' => '03/15/1554 12:45',
            'comment' => 'CommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaire'
        ],
        [
            'author' => 'Bob Lennon',
            'french_creation_date' => '03/15/1554 12:45',
            'comment' => 'CommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaire'
        ]
        ];

    require('templates/post.php');