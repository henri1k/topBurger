<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{

    public function run(): void

    {
    $lanches = [
        [

            'nome' => 'Burguer 1',
            'preco' => 17.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer 2',
            'preco' => 20.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer 3',
            'preco' => 15.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer 4',
            'preco' => 30.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer 5',
            'preco' => 24.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer 6',
            'preco' => 25.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer 7',
            'preco' => 11.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer  8',
            'preco' => 27.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Big Burger 9',
            'preco' => 27.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'coca cola de 2l 10',
            'preco' => 9.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer de feijão 11',
            'preco' => 10.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer de frango 12',
            'preco' => 5.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Burguer bacon extra 13',
            'preco' => 8.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'Crep de frango 14',
            'preco' => 13.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
        [

            'nome' => 'crep de bacon especial 15',
            'preco' => 13.99,
            'ingredientes' => 'carne de salamaandra do oeste, com resto de sopa de boi abovinado viado',
            'imagem' => 'images/hamburgao.jpeg'
        ],
    ];

        foreach ($lanches as $lanche) {
            DB::table('produtos')->insert([
                'nome' => $lanche['nome'],
                'preco' => $lanche['preco'],
                'ingredientes' => $lanche['ingredientes'],
                'imagem' => $lanche['imagem'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }
}
