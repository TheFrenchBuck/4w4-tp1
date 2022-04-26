 <?php
    /**
     * Le hook : 'customize_register' qui sera utilisé dans le l'écouteur add_action()
     *La fonction de rappel : function(WP_Customizer_Manager, $manager)
     *La méthode add_section( id de la section,
     *                      [
     *                           "title" => "Le titre de la section"
     *                        ]);
     *La méthode add_setting ( Le nom de la variable php qui sera utilisée dans notre thème,
     *                          [   "default" => la valeur par défaut de la variable,
     *                             "sanitize_callback"=> "sanitize_hex_color" // permet de valider/filtrer la donnée
     *                         ]);   
     *
     *La méthode add_control ( le nom de la variable php qui sera utilisé dans notre thème,
     *                          ["section"=> le ID de la section,
     *                          "setting"=> le nom de la variable,
     *                        "label"=> l'étiquette de la variable dans le formulaire 
     *                           ])                          
     *
     *Pour utiliser une interface de couleur plus complexe on peut utiliser 
     *La méthode add_control (new WP_Customize_Color_Control($manager, le nom de la variable php,
     *                     ["section"=>"le ID de la section",
     *                    "label"=>l'étiquette de la variable dans le formulaire  ]));
     *
     */

    add_action("customize_register", function (wp_Customize_Manager $manager) {
        $manager->add_section('modifier_background_body', [
            "title" => "Modifier le backgroud du body"
        ]);
        $manager->add_setting('background_body', [
            "default" => "#fffff",
            "sanitize_callback" => "sanitize_hex_color" // permet de valider/filtrer la donnée
        ]);

        // $manager->add_control('background_body', [
        //     "section" => "modifier_background_body", //le ID de la section,
        //     "setting" => "background_body", //le nom de la variable,
        //     "label" => "Couleur du background body" //l'étiquette de la variable dans le formulaire
        // ]);
        $manager->add_control(new WP_Customize_Color_Control($manager, "background_body", [
            "section" => "modifier_background_body",
            "label" => "Couleur du backgroundbody" //l'étiquette de la variable dans le formulaire  ]));

        ]));
        


        // Deuxieme variabe couleur
        $manager->add_setting('background_main', [
            "default" => "#fffff",
            "sanitize_callback" => "sanitize_hex_color" // permet de valider/filtrer la donnée


        ]);

        $manager->add_control(new WP_Customize_Color_Control($manager, "background_main", [
            "section" => "modifier_background_body",
            "label" => "Couleur du couleur titre" //l'étiquette de la variable dans le formulaire  ]));

        ]));
    });

    ?>

