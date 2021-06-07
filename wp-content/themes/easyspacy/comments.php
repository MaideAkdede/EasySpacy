<?php
function custom_comment_form($fields) {
    /* New Labels */
    $label_name = 'Nom *';
    $label_email = 'Adresse email *';
    $label_cookies = 'Enregistrer mon nom et adresse email pour une prochaine fois';
    /* Edit Label Names */
    $fields['author'] = '<p class="comment-form-author"><label for="author">'.$label_name.'</label> <input id="author" name="author" type="text" placeholder="Nom" value="" size="20"></p>';
    $fields['email'] = '<p class="comment-form-email"><label for="email">'.$label_email.'</label> <input id="email" name="email" type="text" placeholder="Adresse email" value="" size="30"></p>';
    $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">'.$label_cookies.'</label></p>';
    /* Remove website field*/
    unset( $fields['url'] );
    /* Return Fields */
    return $fields;
}

add_filter('comment_form_default_fields', 'custom_comment_form');

$comment_arg = array(
    'format'=>'html5'
);
$form_arg = array(
    'label_submit'=> 'Poster mon commentaire',
    'title_reply' => '',
    'title_reply_to'=>'Répondre à %s',
    'comment_notes_before'=> '',
    'comment_notes_after' => 'les champs * sont obligatoires, votre adresse mail ne sera pas divulguée',
    'comment_field' => '<p class="comment-form-comment"><label for="comment">Commentaire *</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
);
// Display Comments
$args = array(
    'status' => 'approve',
    'order'=>'DESC',
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

?>
<h2 class="comments__title">Commentaires</h2>
<div class="comments__form">
    <?php comment_form($form_arg);?>
</div>
<?php if (comments_open() && have_comments()): ?>
    <div class="comments__list">
        <?php if($comments ):
            foreach ($comments as $comment):?>
                <div class="comment">
                    <div class="comment__header comment__<?php comment_ID()?>" >
                        <p class="comment__author"><?php comment_author() ;?></p>
                        <p class="comment__date"><?php comment_date("d/m/Y"); ?></p>
                    </div>
                    <div class="comment__content">
                        <?php comment_text(); ?>
                    </div>
                </div>
            <?php endforeach;endif;?>
    </div>
<?php else: ?>
    <p>Soyez le premier à écrire un commentaire ! </p>
<?php endif; ?>


