<?php

use Illuminate\Database\Seeder;

class ParagrafosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paragrafos')->insert([
            'post_id' => '1',
            'description' => 'No passado dia 4 de Maio iniciou-se o qualificador de Hearthstone para o Worten Game Ring Showdown cujas finais serão disputadas ao vivo no Rock in Rio Lisboa e contarão com a presença de dois jogadores da For The Win Esports Club, Guilherme "TheViper94" Oliveira e Gustavo "OESE" Ramos.'
        ]);

        DB::table('paragrafos')->insert([
            'post_id' => '1',
            'description' => 'O torneio de qualificação do Worten Game Ring Showdown de Hearthstone foi um dos maiores torneios do jogo em Portugal, contando com quase 150 jogadores inscritos. Formatado para ser jogado em best of 3 e em double elimination, a For The Win Esports conseguiu vencer o qualificador e ter, também, o finalista vencido. Deste modo, garantimos a presença de dois jogadores nas finais presenciais a serem jogadas no Rock in Rio.'        ]);

        DB::table('paragrafos')->insert([
            'post_id' => '1',
            'description' => 'Durante o torneio de qualificação estes jogadores apenas perderam um com o outro. OESE derrotou o TheViper94 na winner\'s bracket e não perdeu qualquer jogo até à final do mesmo. Na final, foi o TheViper94 que o derrotou, tendo assim a sua vigança e igualando o score de jogos entre estes dois participantes. Assim, estes dois jogadores da FTW vão jogar Hearthstone no Rock in Rio numa data a anunciar.'        ]);


        DB::table('paragrafos')->insert([
            'post_id' => '2',
            'description' => 'O atleta da Grow uP eSports, João ‘Zuka‘ Oliveira vai jogar o Summer Playoff do Hearthstone Championship Tour(HCT) a Itália. Um feito inédito, sendo pela primeira vez que um Português se apura para os playoffs através de um lugar dentro do top64 Europeu da season.
Este ano de 2018, há apenas 5 locais na Europa onde os jogadores apurados vão poder jogar os playoffs, e Zuka vai jogar a Milão, mais concretamente no Samsung Arena, nos próximos dias 5 e 6 de Maio.
O facto de ter sido o Português com mais pontos, garante também o lugar de ‘Anchor’ no Hearthstone Global Games. Zuka terá o objectivo de capitanear as cores Portuguesas no campeonato do mundo de países. Em breve serão anunciados os atletas que vão a votos para ocuparem um lugar dentro do quarteto, estes atletas serão aqueles que mais pontos conquistaram na season que terminou no fim do mês de Março.
Também o atleta Pedro ‘Florindo‘ Parreira esteve em destaque esta season ao terminar com dois top100 e um top200, conquistando um total de 24 pontos HCT. Pontos que não foram suficientes para os playoffs, mas que faz com que o jogador vá a votações para uma possível entrada nos Hearthstone Global Games representando Portugal.'
        ]);

        DB::table('paragrafos')->insert([
            'post_id' => '3',
            'description' => 'Após participar na DreamHack Summer na Suécia, Nuno "Ignite" Pinho está de malas feitas para um torneio fora de Portugual. Desta vez, o seu destino é a França, mais precisamente para
             o HearthStone Festival que irá decorrer entre os dias 2 e 3 de Julho no Théatre Barrière de Lille.'      ]);

        DB::table('paragrafos')->insert([
            'post_id' => '3',
            'description' => 'O HearthStone Festival irá contar com 128 jogadores e terá uma prizepool de 20 000€, dando também 43 pontos para o HearthStone Championship Tour. Nuno "Ignite" Pinho que participou recentemente na DreamHack Summer, procura no HearthStone Festival uma oportunidade para mostrar a sua qualidade depois de ter sido eliminado da DreamHack Summer após 5 jogos realizados onde obteve duas vitórias e três derrotas. '
        ]);

        DB::table('paragrafos')->insert([
            'post_id' => '3',
            'description' => '"Este fim-de-semana vou estar por Lille, França. Vou participar no Hearthstone Festival com um prize pool de 20.000€ contra alguns jogadores de renome, nomeadamente Thijs, Rdu, Powder, AKAWonder, Naiman, entre outros. O formato vai ser conquest com 1 ban, portanto, um quanto diferente do formato do circuito Dreamhack. A verdade é que na Dreamhack não correu muito bem, a preparação foi extensa (tinha praticado com o Rdu principalmente), mas não obtive frutos... pelo menos o meu parceiro de prática ganhou o evento, not so bad! Tento sempre ter um edge em metas pouco diversos, como é o exemplo deste meta, warlock/warrior/shaman em todo o lado, com o acréscimo de hunter/druid como 4º normalmente. Tento procurar a vantagem dentro do convencional, e às vezes até escapo para o menos convencional - esta é capaz de ser uma dessas vezes, ainda estou a ponderar levar um ou dois decks menos vistos, pelo factor estratégico e surpresa. A ver vamos! O torneio tem 128 participantes, 16 grupos de 8, round robin, passando 2 de cada grupo para top16 double elimination. Espero alcançar no mínimo o top16, sinto-me sempre confiante para tal, apelo agora ao coração das cartas sobre o qual Yugi nos falou! Amen."'
        ]);

        DB::table('paragrafos')->insert([
            'post_id' => '4',
            'description' => 'Arrancou de mais uma temporada do Hearthstone Championship Tour! Veja aqui o video!'
        ]);



    }
}


