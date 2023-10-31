<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\BD;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function listaPersona(){
        $personas = [
            [
                "personasID" => "1",
                "nombres" => "Adrian",
                "paterno" => "lipa",
                "materno" => "apaza",
                "bibliografia" => "El fragmento estándar de Lorem Ipsum utilizado desde el siglo XVI se reproduce a continuación para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de  de Cicerón también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham",
                "foto" => "https://cdn.icon-icons.com/icons2/1999/PNG/512/avatar_business_man_people_person_profile_user_icon_123384.png",
                "documento" => "77161564",
                "celular" => "92166290",
                
            ],
            [
                "personasID" => "2",
                "nombres" => "Adria",
                "paterno" => "lipa",
                "materno" => "ccama",
                "bibliografia" => "El fragmento estándar de Lorem Ipsum utilizado desde el siglo XVI se reproduce a continuación para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de  de Cicerón también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham",
                "foto" => "https://cdn.icon-icons.com/icons2/1861/PNG/512/man16_118112.png",
                "documento" => "77161556",
                "celular" => "92166456",
            ]   ,
            [
                "personasID" => "3",
                "nombres" => "elvis",
                "paterno" => "lipa",
                "materno" => "ccama",
                "bibliografia" => "El fragmento estándar de Lorem Ipsum utilizado desde el siglo XVI se reproduce a continuación para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de  de Cicerón también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham",
                "foto" => "https://cdn.icon-icons.com/icons2/1999/PNG/512/avatar_business_man_people_person_profile_user_icon_123384.png",
                "documento" => "7716167",
                "celular" => "92166568",
            ],
            [
                "personasID" => "3",
                "nombres" => "jhon",
                "paterno" => "apaza",
                "materno" => "ccama",
                "bibliografia" => "El fragmento estándar de Lorem Ipsum utilizado desde el siglo XVI se reproduce a continuación para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de  de Cicerón también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham",
                "foto" => "https://cdn.icon-icons.com/icons2/1999/PNG/512/avatar_business_man_people_person_profile_user_icon_123384.png",
                "documento" => "77161894",
                "celular" => "92166456",
            ],
            [
                "personasID" => "4",
                "nombres" => "Adriana",
                "paterno" => "aycaya",
                "materno" => "lope",
                "bibliografia" => "El fragmento estándar de Lorem Ipsum utilizado desde el siglo XVI se reproduce a continuación para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de  de Cicerón también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham",
                "foto" => "https://cdn.icon-icons.com/icons2/1999/PNG/512/avatar_business_man_people_person_profile_user_icon_123384.png",
                "documento" => "77161458",
                "celular" => "92166267",
            ],
            [
                "personasID" => "5",
                "nombres" => "karla",
                "paterno" => "mamani",
                "materno" => "ccama",
                "bibliografia" => "El fragmento estándar de Lorem Ipsum utilizado desde el siglo XVI se reproduce a continuación para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de  de Cicerón también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham",
                "foto" => "https://cdn.icon-icons.com/icons2/1999/PNG/512/avatar_business_man_people_person_profile_user_icon_123384.png",
                "documento" => "77161451",
                "celular" => "92166789",
            ]
        
            ];
            return view('lista-personas', compact ('personas'));
        
        

    }


public function mostrarPersona( Request  $request, $id_persona) {
   // dd($request);

    return view('mostrar-persona',compact('id_persona'));

}
}