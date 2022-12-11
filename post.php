<?php

    require('src/model.php');

    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $identifier = $_GET['id'];
    }
    else {
        echo "Erreur : aucun identiiant de billet envoyé";

        die;
    }

    $post = getPost($identifier);
    $comments = getComments($identifier);

    

    // $post = [
    //     'title' => "Titre exemple",
    //     'french_creation_date' => '03/12/1996 à 04:20',
    //     'content' => 'Contenu du post,Contenu du post, Contenu du post, Contenu du post, Contenu du post,Contenu du post',
    // ];

    // $comments = [
    //     [
    //         'author' => 'Bob Lennon',
    //         'french_creation_date' => '03/15/1554 12:45',
    //         'comment' => 'CommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaire'
    //     ],
    //     [
    //         'author' => 'Bob Lennon',
    //         'french_creation_date' => '03/15/1554 12:45',
    //         'comment' => 'CommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaire'
    //     ],
    //     [
    //         'author' => 'Bob Lennon',
    //         'french_creation_date' => '03/15/1554 12:45',
    //         'comment' => 'CommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaireCommentaire'
    //     ]
    // ];

    require('templates/post.php');