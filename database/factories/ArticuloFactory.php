<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Articulo::class;

    public function definition(): array
    {
        return [

            'nombre' => $this->faker->randomElement([
                'Zapatillas deportivas',
                'Portátil ultradelgado',
                'Smartphone de última generación',
                'Auriculares inalámbricos',
                'Reloj inteligente',
                'Cámara DSLR',
                'Tablet de alta resolución',
                'Teclado mecánico para juegos',
                'Mouse ergonómico',
                'Monitor curvo de 27 pulgadas',
                'Impresora láser de alta velocidad',
                'Disco duro externo de 2TB',
                'Altavoces Bluetooth',
                'Robot aspirador inteligente',
                'Bicicleta de montaña',
                'Mochila resistente al agua',
                'Cafetera de espresso',
                'Licuadora de alta potencia',
                'Silla ergonómica de oficina',
                'Mesa de comedor extensible',
                'Sofá reclinable',
                'Colchón ortopédico',
                'Ropa de cama de lujo',
                'Maleta con ruedas',
                'Bolso de cuero genuino',
                'Reloj de pulsera elegante',
                'Gafas de sol polarizadas',
                'Perfume de diseñador',
                'Crema antienvejecimiento',
                'Cepillo de dientes eléctrico',
                'Cargador solar portátil',
                'Horno de microondas de acero inoxidable',
                'Hervidor eléctrico',
                'Aspiradora de mano sin cables',
                'Caja de herramientas resistente',
                'Juego de destornilladores de precisión',
                'Set de maquillaje profesional',
                'Taladro inalámbrico de alta potencia',
                'Lavadora de carga frontal',
                'Secadora de ropa eficiente',
                'Plancha de vapor',
                'Sistema de seguridad para el hogar',
                'Kit de fitness en casa',
                'Juego de sartenes antiadherentes',
                'Máquina de coser electrónica',
                'Batería externa de gran capacidad',
                'Altavoz inteligente con asistente virtual',
                'Proyector de alta definición',
                'Cortadora de césped automática',
                'Cadena de oro de 18 quilates',
                'Perfume unisex exclusivo',
                'Caja de vinos de colección'
            ]),
            'estado' => $this->faker->randomElement(['Activo', 'Inactivo'])
        ];
    }
}
