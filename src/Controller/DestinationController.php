<?php
// src/Controller/DestinationController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DestinationController extends AbstractController
{
    #[Route('/destination', name: 'destination')]
    public function index(): Response
    {
        $destinations = [
            'paris' => [
                'name' => 'Paris',
                'description' => [
                    "Paris, capitale mondiale de l'art, de la culture et du romantisme, est une ville qui ne cesse d'émerveiller. Entre son patrimoine architectural iconique, ses musées d'exception, et ses quartiers aux atmosphères variées, Paris est une destination incontournable pour les voyageurs du monde entier.",
                    "Commencez votre visite par les monuments emblématiques tels que la majestueuse Tour Eiffel, la splendeur gothique de Notre-Dame, ou l'arc de triomphe qui surplombe la célèbre avenue des Champs-Élysées. Laissez-vous ensuite séduire par le charme du quartier de Montmartre, avec ses artistes de rue, ses ruelles pavées, et la basilique du Sacré-Cœur offrant une vue panoramique sur la ville.",
                    "Paris, c'est aussi la capitale de l'art avec des musées de renommée mondiale comme le Louvre, où repose la célèbre Joconde, ou le musée d'Orsay, qui célèbre les chefs-d'œuvre impressionnistes. Les amateurs de modernité apprécieront le Centre Pompidou et ses expositions d'art contemporain.",
                    "Pour une pause gourmande, découvrez la richesse de la gastronomie française, des croissants croustillants aux macarons raffinés en passant par les bistrots typiques où se dégustent des plats traditionnels. En soirée, profitez de l'ambiance magique des illuminations, d'une croisière romantique sur la Seine ou d'un spectacle au Moulin Rouge.",
                    "Paris est bien plus qu'une destination : c'est une expérience, un art de vivre qui résonne à travers ses rues, ses cafés et ses parcs comme le Jardin des Tuileries ou le Bois de Boulogne.",
                ],
                'image' => 'paris.jpg',
                'mapEmbed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.7784512106!2d2.264463229290676!3d48.858938312171844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sen!2sfr!4v1732786258896!5m2!1sen!2sfr'
            ],
            'newyork' => [
                'name' => 'New York',
                'description' => [
                    "New York, surnommée la ville qui ne dort jamais, est une métropole fascinante où modernité et histoire cohabitent harmonieusement. Capitale mondiale de la culture, de la finance et de l'art, New York offre une diversité et une énergie incomparables qui séduisent les visiteurs du monde entier.",
                    "Au cœur de la ville, Manhattan attire tous les regards avec ses gratte-ciels emblématiques, ses musées renommés et ses quartiers dynamiques. Montez au sommet de l'Empire State Building ou du One World Trade Center pour des vues spectaculaires sur la skyline légendaire. Baladez-vous dans Central Park, un immense écrin de verdure au milieu de l'agitation urbaine, où se mêlent joggeurs, musiciens de rue, et familles en promenade.",
                    "Times Square, avec ses lumières étincelantes et ses écrans géants, incarne l'effervescence unique de New York. Non loin de là, les amateurs de spectacles se rendent à Broadway, le temple du théâtre et des comédies musicales.",
                    "New York, c'est aussi une ville riche d'histoire. Prenez le ferry pour visiter la Statue de la Liberté, symbole de liberté et d'espoir, ou découvrez Ellis Island, porte d'entrée des millions d'immigrants qui ont contribué à façonner l'identité multiculturelle de la ville. Le Mémorial du 11 septembre et son musée honorent avec émotion les victimes et les héros de cette tragédie moderne.",
                    "Les amateurs d'art seront comblés par des institutions prestigieuses telles que le Metropolitan Museum of Art (le Met), le Museum of Modern Art (MoMA), ou encore le Whitney Museum of American Art, qui regorgent de trésors artistiques et culturels.",
                    "Côté gastronomie, New York est une véritable mosaïque culinaire. Dégustez une part de pizza à emporter dans les rues animées, savourez des bagels au petit-déjeuner ou explorez des cuisines du monde entier dans les quartiers comme Chinatown, Little Italy, ou Harlem. Les marchés comme le Chelsea Market sont parfaits pour les amateurs de street food et de produits locaux.",
                    "Enfin, la ville regorge de boutiques, des enseignes de luxe de la Cinquième Avenue aux friperies vintage de Brooklyn. À chaque coin de rue, New York offre des surprises, des rencontres et des expériences uniques, le tout dans une ambiance électrisante qui ne ressemble à aucune autre au monde.",
                    "Que vous soyez passionné d'art, amoureux d'architecture, curieux d'histoire ou simplement en quête de nouvelles aventures, New York promet un séjour mémorable et intense, à la hauteur de vos rêves.",
                ],
                'image' => 'newyork.jpg',
                'mapEmbed' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25422019474!2d-74.14483126918057!3d40.69763074464991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sfr!4v1732786149591!5m2!1sen!2sfr"
            ],
            'kyoto' => [
                'name' => 'Kyoto',
                'description' => [
                    "Kyoto, ancienne capitale impériale du Japon, est une ville empreinte d'histoire et de sérénité, où la tradition rencontre la beauté naturelle. Avec ses temples majestueux, ses jardins zen et ses festivals traditionnels, Kyoto incarne l'essence même de la culture japonaise.",
                    "Partez à la découverte des sanctuaires millénaires comme le célèbre Fushimi Inari Taisha, avec ses milliers de torii vermillons formant des tunnels enchanteurs, ou le Kinkaku-ji, le Pavillon d'Or, qui scintille sur les eaux d'un étang paisible. Les amateurs de nature apprécieront une promenade dans la bambouseraie d'Arashiyama, un lieu mystique où le vent murmure à travers les hauts bambous.",
                    "Kyoto regorge également de quartiers historiques tels que Gion, où les geishas continuent de perpétuer leurs arts, ou Higashiyama, où les ruelles bordées de machiya (maisons en bois traditionnelles) plongent les visiteurs dans une atmosphère d'un autre temps.",
                    "Chaque saison transforme la ville en un tableau vivant : les cerisiers en fleurs au printemps, les érables flamboyants en automne, et les paysages enneigés en hiver confèrent à Kyoto une ambiance unique toute l'année.",
                    "Pour une immersion totale, participez à une cérémonie du thé, visitez un ryokan (auberge traditionnelle) ou explorez les marchés locaux comme le Nishiki Market, où les saveurs et les odeurs de la cuisine japonaise éveilleront vos papilles. Kyoto est un voyage dans le temps, un havre de paix qui vous reconnecte avec l'essentiel.",
                ],
                'image' => 'kyoto.jpg',
                'mapEmbed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208917.38821327945!2d135.553718286474!3d35.09836514598305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001a8d6cd3cc3f1%3A0xc0961d366bbb1d3d!2sKyoto%2C%20Japan!5e0!3m2!1sen!2sfr!4v1732786309000!5m2!1sen!2sfr'
            ],
            'santorini' => [
                'name' => 'Santorini',
                'description' => [
                    "Santorin, perle de la mer Égée, est une île d'une beauté saisissante qui éveille les sens et nourrit l'imaginaire. Avec ses falaises abruptes, ses villages pittoresques aux maisons blanches ornées de volets bleus, et ses églises aux coupoles saphir, cette destination est un véritable chef-d'œuvre naturel et architectural.",
                    "Les amateurs de panoramas spectaculaires seront comblés par les vues à couper le souffle sur la caldeira, vestige d'une ancienne éruption volcanique. Flânez dans les ruelles sinueuses d'Oia, célèbre pour ses couchers de soleil légendaires, ou explorez la capitale, Fira, où se mêlent boutiques artisanales, cafés animés, et terrasses offrant une vue imprenable sur la mer.",
                    "Santorin, c'est aussi une palette de plages uniques, avec des étendues de sable noir, rouge ou blanc, chacune racontant l'histoire volcanique de l'île. Pour les férus d'histoire, les sites archéologiques d'Akrotiri et de l'ancienne Théra dévoilent une civilisation riche et mystérieuse.",
                    "Enfin, laissez-vous tenter par une croisière en mer autour de l'île ou un dîner romantique dans une taverne locale, où les saveurs de la cuisine grecque, comme le fava et le vin de Santorin, subliment votre expérience. Santorin est une invitation à la contemplation, à la détente et à l'évasion.",
                ],
                'image' => 'santorini.jpg',
                'mapEmbed' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102754.5548634938!2d25.338058546074745!3d36.40726358990758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1499ce86adfd9ff7%3A0xb2a761f740d68afc!2sSantorini!5e0!3m2!1sen!2sfr!4v1732786224803!5m2!1sen!2sfr"
            ]
        ];
        $destination = $_GET['destination'];
        $title = "Agence Horizon - " . $destinations[$destination]['name'];
        return $this->render('destination.html.twig', [
            'title' => $title,
            'destination' => $destinations[$destination]
        ]);
    }
}
