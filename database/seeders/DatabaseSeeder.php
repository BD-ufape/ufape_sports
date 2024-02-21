<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'adm@adm',
                'password' => Hash::make('1'),
                'telefone' => '1',
                'cpf' => '01',
            ],
            [
                'name' => 'Cliente A',
                'email' => 'a@a',
                'password' => Hash::make('1'),
                'telefone' => '2',
                'cpf' => '02',
            ],
            [
                'name' => 'Cliente B',
                'email' => 'b@b',
                'password' => Hash::make('1'),
                'telefone' => '3',
                'cpf' => '03',
            ],
        ]);

        DB::table('enderecos')->insert([
            [
                'user_id' => '1',
                'estado' => 'Ooo',
                'cidade' => 'Cidadela',
                'bairro' => 'Sei lá man',
                'logradouro' => 'Rua 1 Número 1',
                'cep' => '01',
            ],
            [
                'user_id' => '2',
                'estado' => 'Arkham',
                'cidade' => 'Sem nome',
                'bairro' => 'Sei lá man',
                'logradouro' => 'Rua 42 Número 0',
                'cep' => '69',
            ],
            [
                'user_id' => '3',
                'estado' => 'PE',
                'cidade' => 'Garanhuns',
                'bairro' => 'Sei lá man',
                'logradouro' => '???',
                'cep' => '5529????',
            ],
        ]);

        DB::table('compras')->insert([
            [
                'user_id' => 2,
                'concluida' => false,
                'data_compra' => null,
            ],
            [
                'user_id' => 3,
                'concluida' => false,
                'data_compra' => null,
            ],
        ]);

        DB::table('categorias')->insert([
            [
                'nome' => 'Roupas',
                'descricao' => 'Roupas variadas',
            ],
            [
                'nome' => 'Equipamentos',
                'descricao' => 'Equipamentos esportivos',
            ],
            [
                'nome' => 'Acessórios para Corrida',
                'descricao' => 'Acessórios variados para corrida, incluindo cintos de hidratação, braçadeiras para smartphones e bonés.',
            ],
            [
                'nome' => 'Yoga e Pilates',
                'descricao' => 'Equipamentos e acessórios para a prática de Yoga e Pilates, incluindo mats, blocos e cintos.',
            ],
            [
                'nome' => 'Nutrição Esportiva',
                'descricao' => 'Produtos de nutrição esportiva, como suplementos, barras de proteínas e bebidas energéticas.',
            ],
            [
                'nome' => 'Treino em Casa',
                'descricao' => 'Equipamentos e acessórios para treino em casa, incluindo pesos livres, cordas de pular e faixas de resistência.',
            ],
            [
                'nome' => 'Esqui e Snowboard',
                'descricao' => 'Equipamentos e vestuário para esqui e snowboard, incluindo pranchas, botas e roupas térmicas.',
            ],
            [
                'nome' => 'Camping e Hiking',
                'descricao' => 'Equipamentos para camping e hiking, incluindo barracas, sacos de dormir e lanternas.',
            ],
            [
                'nome' => 'Natação',
                'descricao' => 'Artigos para natação, incluindo óculos, toucas e trajes de banho.',
            ],
            [
                'nome' => 'Esportes de Raquete',
                'descricao' => 'Equipamentos para esportes de raquete, como tênis, badminton e ping-pong, incluindo raquetes e bolas.',
            ],
            [
                'nome' => 'Eletrônicos Esportivos',
                'descricao' => 'Dispositivos eletrônicos para esportes, incluindo relógios inteligentes, monitores de atividade e câmeras de ação.',
            ],
            [
                'nome' => 'Surf e Esportes Aquáticos',
                'descricao' => 'Produtos para surf e outros esportes aquáticos, incluindo pranchas, wetsuits e acessórios.',
            ]
    ]);

        DB::table('produtos')->insert([
            ['categoria_id' => '1', 'nome' => 'Camisa de time', 'descricao' => 'Camisa de time aleatório', 'marca' => 'Adidas', 'cor' => '#000000', 'preco' => 110.50, 'peso' => 1, 'estoque' => 10,],
            ['categoria_id' => '2', 'nome' => 'Bola de futebol', 'descricao' => 'bola', 'marca' => 'Adidas', 'cor' => '#000000', 'preco' => 50, 'peso' => 2, 'estoque' => 5,],
            ['categoria_id' => '1', 'nome' => 'Legging Esportiva', 'descricao' => 'Legging esportiva para treino', 'marca' => 'FitPro', 'cor' => '#FF00FF', 'preco' => 120, 'peso' => 0.2, 'estoque' => 50],
            ['categoria_id' => '1', 'nome' => 'Jaqueta Corta-Vento', 'descricao' => 'Jaqueta leve para corrida', 'marca' => 'WindBreak', 'cor' => '#0000FF', 'preco' => 200, 'peso' => 0.5, 'estoque' => 30],
            ['categoria_id' => '2', 'nome' => 'Esteira Elétrica', 'descricao' => 'Esteira elétrica com 10 programas', 'marca' => 'RunFast', 'cor' => '#808080', 'preco' => 2500, 'peso' => 45, 'estoque' => 15],
            ['categoria_id' => '2', 'nome' => 'Kettlebell 16kg', 'descricao' => 'Kettlebell de ferro', 'marca' => 'IronGrip', 'cor' => '#8B0000', 'preco' => 160, 'peso' => 16, 'estoque' => 40],
            ['categoria_id' => '3', 'nome' => 'Cinto de Hidratação', 'descricao' => 'Cinto com dois compartimentos de água', 'marca' => 'HydroRun', 'cor' => '#00008B', 'preco' => 90, 'peso' => 0.3, 'estoque' => 50],
            ['categoria_id' => '3', 'nome' => 'Braçadeira para Smartphone', 'descricao' => 'Braçadeira ajustável para corrida', 'marca' => 'SmartFit', 'cor' => '#008000', 'preco' => 60, 'peso' => 0.1, 'estoque' => 70],
            ['categoria_id' => '4', 'nome' => 'Mat de Yoga Ecológico', 'descricao' => 'Mat de yoga feito de material sustentável', 'marca' => 'EcoYoga', 'cor' => '#8FBC8F', 'preco' => 180, 'peso' => 1, 'estoque' => 40],
            ['categoria_id' => '4', 'nome' => 'Bloco de Yoga', 'descricao' => 'Bloco para prática de yoga e pilates', 'marca' => 'BalanceBlock', 'cor' => '#FFD700', 'preco' => 50, 'peso' => 0.5, 'estoque' => 60],
            ['categoria_id' => '5', 'nome' => 'Whey Protein Isolado', 'descricao' => 'Suplemento de proteína isolada', 'marca' => 'MuscleGain', 'cor' => '#FFFFFF', 'preco' => 250, 'peso' => 1, 'estoque' => 100],
            ['categoria_id' => '5', 'nome' => 'Barra de Proteína', 'descricao' => 'Barra de proteína com chocolate', 'marca' => 'EnergyBar', 'cor' => '#8B4513', 'preco' => 10, 'peso' => 0.05, 'estoque' => 200],
            ['categoria_id' => '6', 'nome' => 'Corda de Pular Ajustável', 'descricao' => 'Corda de pular com contador', 'marca' => 'JumpMaster', 'cor' => '#FF4500', 'preco' => 80, 'peso' => 0.2, 'estoque' => 90],
            ['categoria_id' => '6', 'nome' => 'Faixas de Resistência', 'descricao' => 'Conjunto de faixas de resistência', 'marca' => 'FlexBand', 'cor' => '#FF69B4', 'preco' => 150, 'peso' => 0.5, 'estoque' => 80],
            ['categoria_id' => '7', 'nome' => 'Óculos de Snowboard', 'descricao' => 'Óculos com proteção UV para snowboard', 'marca' => 'SnowView', 'cor' => '#A52A2A', 'preco' => 300, 'peso' => 0.2, 'estoque' => 50],
            ['categoria_id' => '7', 'nome' => 'Prancha de Snowboard', 'descricao' => 'Prancha all-mountain para iniciantes', 'marca' => 'MountainWave', 'cor' => '#0000CD', 'preco' => 1200, 'peso' => 5, 'estoque' => 20],
            ['categoria_id' => '8', 'nome' => 'Barraca de Trilha para 2 Pessoas', 'descricao' => 'Barraca leve e resistente para trilha', 'marca' => 'TrailHome', 'cor' => '#008B8B', 'preco' => 600, 'peso' => 2.5, 'estoque' => 35],
            ['categoria_id' => '8', 'nome' => 'Lanterna Tática Recarregável', 'descricao' => 'Lanterna potente com foco ajustável', 'marca' => 'BrightNight', 'cor' => '#000000', 'preco' => 120, 'peso' => 0.25, 'estoque' => 100],
            ['categoria_id' => '9', 'nome' => 'Óculos de Natação Antiembaçante', 'descricao' => 'Óculos de natação com proteção UV', 'marca' => 'AquaVision', 'cor' => '#0000FF', 'preco' => 100, 'peso' => 0.1, 'estoque' => 80],
            ['categoria_id' => '9', 'nome' => 'Maiô de Competição', 'descricao' => 'Maiô feminino para competição', 'marca' => 'SpeedSwim', 'cor' => '#FF1493', 'preco' => 300, 'peso' => 0.2, 'estoque' => 40],
            ['categoria_id' => '10', 'nome' => 'Raquete de Tênis Profissional', 'descricao' => 'Raquete de tênis com corda de alta tensão', 'marca' => 'AceMaster', 'cor' => '#32CD32', 'preco' => 900, 'peso' => 0.3, 'estoque' => 30],
            ['categoria_id' => '10', 'nome' => 'Bolas de Ping-Pong', 'descricao' => 'Conjunto de bolas de ping-pong premium', 'marca' => 'PingPro', 'cor' => '#FFFFFF', 'preco' => 20, 'peso' => 0.05, 'estoque' => 100],
            ['categoria_id' => '11', 'nome' => 'Relógio Inteligente com GPS', 'descricao' => 'Relógio inteligente com monitoramento de atividades', 'marca' => 'SmartTrack', 'cor' => '#000000', 'preco' => 1200, 'peso' => 0.1, 'estoque' => 60],
            ['categoria_id' => '11', 'nome' => 'Câmera de Ação 4K', 'descricao' => 'Câmera de ação à prova dágua com estabilização', 'marca' => 'ActionCam', 'cor' => '#00008B', 'preco' => 900, 'peso' => 0.2, 'estoque' => 40],
            ['categoria_id' => '12', 'nome' => 'Prancha de Surf', 'descricao' => 'Prancha para surfistas intermediários', 'marca' => 'WaveRider', 'cor' => '#1E90FF', 'preco' => 1500, 'peso' => 3, 'estoque' => 25],
            ['categoria_id' => '12', 'nome' => 'Wetsuit para Surf', 'descricao' => 'Wetsuit de neoprene para águas frias', 'marca' => 'SeaGuard', 'cor' => '#000000', 'preco' => 800, 'peso' => 1, 'estoque' => 30],
            ['categoria_id' => '1', 'nome' => 'Camiseta Dry-Fit Masculina', 'descricao' => 'Camiseta respirável para exercícios', 'marca' => 'QuickDry', 'cor' => '#00FF00', 'preco' => 90, 'peso' => 0.15, 'estoque' => 70],
            ['categoria_id' => '1', 'nome' => 'Shorts Esportivo Feminino', 'descricao' => 'Shorts leve para atividades físicas', 'marca' => 'ActiveWear', 'cor' => '#FF69B4', 'preco' => 80, 'peso' => 0.2, 'estoque' => 50],
            ['categoria_id' => '2', 'nome' => 'Bicicleta Ergométrica', 'descricao' => 'Bicicleta ergométrica compacta', 'marca' => 'CycleFit', 'cor' => '#808080', 'preco' => 1500, 'peso' => 25, 'estoque' => 20],
            ['categoria_id' => '2', 'nome' => 'Kit Halteres Ajustáveis', 'descricao' => 'Kit de halteres com peso ajustável', 'marca' => 'FlexWeights', 'cor' => '#0000FF', 'preco' => 300, 'peso' => 10, 'estoque' => 40],
            ['categoria_id' => '3', 'nome' => 'Relógio de Corrida com GPS', 'descricao' => 'Relógio com GPS e monitor cardíaco', 'marca' => 'RunTech', 'cor' => '#FF4500', 'preco' => 1200, 'peso' => 0.1, 'estoque' => 30],
            ['categoria_id' => '3', 'nome' => 'Boné para Corredores', 'descricao' => 'Boné leve com proteção UV', 'marca' => 'SunCap', 'cor' => '#FFFFFF', 'preco' => 70, 'peso' => 0.1, 'estoque' => 100],
            ['categoria_id' => '4', 'nome' => 'Cinto de Yoga', 'descricao' => 'Cinto para auxílio em posições de yoga', 'marca' => 'YogaFlex', 'cor' => '#8B4513', 'preco' => 40, 'peso' => 0.1, 'estoque' => 60],
            ['categoria_id' => '4', 'nome' => 'Roda de Yoga', 'descricao' => 'Roda de yoga para aprimorar flexibilidade', 'marca' => 'FlexCircle', 'cor' => '#FFA07A', 'preco' => 150, 'peso' => 1.2, 'estoque' => 40],
            ['categoria_id' => '5', 'nome' => 'Shake de Proteína Vegana', 'descricao' => 'Shake de proteína 100% vegano', 'marca' => 'GreenPower', 'cor' => '#228B22', 'preco' => 120, 'peso' => 0.5, 'estoque' => 80],
            ['categoria_id' => '5', 'nome' => 'Gel Energético', 'descricao' => 'Gel energético para resistência esportiva', 'marca' => 'EnduroGel', 'cor' => '#FFD700', 'preco' => 15, 'peso' => 0.05, 'estoque' => 150],
            ['categoria_id' => '6', 'nome' => 'Anel de Pilates', 'descricao' => 'Anel de resistência para pilates', 'marca' => 'PilatesPro', 'cor' => '#FFB6C1', 'preco' => 100, 'peso' => 0.5, 'estoque' => 70],
            ['categoria_id' => '6', 'nome' => 'Tapete de Treino', 'descricao' => 'Tapete antiderrapante para exercícios', 'marca' => 'GripMat', 'cor' => '#00CED1', 'preco' => 120, 'peso' => 1, 'estoque' => 50],
            ['categoria_id' => '7', 'nome' => 'Capacete de Esqui', 'descricao' => 'Capacete com ventilação para esqui', 'marca' => 'SnowHead', 'cor' => '#A52A2A', 'preco' => 400, 'peso' => 0.6, 'estoque' => 30],
            ['categoria_id' => '7', 'nome' => 'Óculos de Esqui Antiembaçante', 'descricao' => 'Óculos antiembaçante para esqui e snowboard', 'marca' => 'ClearVision', 'cor' => '#00008B', 'preco' => 350, 'peso' => 0.2, 'estoque' => 40],
            ['categoria_id' => '8', 'nome' => 'Mochila de Hiking 40L', 'descricao' => 'Mochila resistente para hiking', 'marca' => 'TrailExplorer', 'cor' => '#778899', 'preco' => 400, 'peso' => 1.5, 'estoque' => 30],
            ['categoria_id' => '8', 'nome' => 'Bastões de Caminhada', 'descricao' => 'Par de bastões ajustáveis para caminhada', 'marca' => 'WalkPro', 'cor' => '#B8860B', 'preco' => 200, 'peso' => 0.8, 'estoque' => 50],
            ['categoria_id' => '9', 'nome' => 'Touca de Natação Silicone', 'descricao' => 'Touca de silicone durável para natação', 'marca' => 'AquaHead', 'cor' => '#FFA500', 'preco' => 50, 'peso' => 0.1, 'estoque' => 80],
            ['categoria_id' => '9', 'nome' => 'Pé de Pato de Treinamento', 'descricao' => 'Nadadeiras curtas para treino de natação', 'marca' => 'SpeedFin', 'cor' => '#20B2AA', 'preco' => 180, 'peso' => 1, 'estoque' => 40],
            ['categoria_id' => '10', 'nome' => 'Bola de Badminton', 'descricao' => 'Conjunto de petecas para badminton', 'marca' => 'FlyHigh', 'cor' => '#FFFFFF', 'preco' => 30, 'peso' => 0.05, 'estoque' => 100],
            ['categoria_id' => '10', 'nome' => 'Raquete de Squash', 'descricao' => 'Raquete leve para jogadores de squash', 'marca' => 'SquashMaster', 'cor' => '#8A2BE2', 'preco' => 500, 'peso' => 0.2, 'estoque' => 30],
            ['categoria_id' => '11', 'nome' => 'Monitor de Atividade', 'descricao' => 'Pulseira de atividade com monitoramento de sono', 'marca' => 'LifeTrack', 'cor' => '#000000', 'preco' => 300, 'peso' => 0.05, 'estoque' => 70],
            ['categoria_id' => '11', 'nome' => 'Fones de Ouvido Bluetooth Esportivos', 'descricao' => 'Fones de ouvido sem fio resistentes ao suor', 'marca' => 'BeatRun', 'cor' => '#FF4500', 'preco' => 250, 'peso' => 0.05, 'estoque' => 90],
            ['categoria_id' => '12', 'nome' => 'Leash para Prancha de Surf', 'descricao' => 'Cordinha resistente para prancha de surf', 'marca' => 'WaveCord', 'cor' => '#0000CD', 'preco' => 80, 'peso' => 0.2, 'estoque' => 60],
            ['categoria_id' => '12', 'nome' => 'Cera para Prancha', 'descricao' => 'Cera ecológica para maior aderência na prancha', 'marca' => 'EcoWax', 'cor' => '#F5DEB3', 'preco' => 20, 'peso' => 0.1, 'estoque' => 100],
            
        ]);

        DB::table('promocoes')->insert([
            [
                'nome' => 'Sexta Caotica',
                'descricao' => 'Chaos',
                'data_inicio' => '16/02/24',
                'data_fim' => '17/02/24',
                'percentagem' => 75,
            ],

            [
                'nome' => 'Corrida Contra o Tempo',
                'descricao' => 'Descontos acelerados em todos os produtos de corrida e fitness. Aproveite antes que o tempo acabe!',
                'data_inicio' => '22/02/2024',
                'data_fim' => '24/02/2024',
                'percentagem' => 50,
            ],
            [
                'nome' => 'Aventura Gelada',
                'descricao' => 'Equipe-se para o frio com ofertas quentes em equipamentos de esqui, snowboard e roupas de inverno.',
                'data_inicio' => '22/02/2024',
                'data_fim' => '24/02/2024',
                'percentagem' => 40,
            ],
            
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
