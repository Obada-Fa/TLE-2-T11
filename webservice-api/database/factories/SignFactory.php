<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Lesson;
use App\Models\Sign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sign>
 */
class SignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Sign::class;
    public function definition(): array
    {
        $signs = [
            // Les 1 - 1
            ['title' => 'Algemeen vraaggebaar', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een algemeen gebaar voor vragen.'],
            ['title' => 'Hoe', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar de manier waarop iets gebeurt.'],
            ['title' => 'Hoelang', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar een tijdsduur.'],
            ['title' => 'Hoeveel', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar een hoeveelheid.'],
            ['title' => 'Waarom', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar een reden.'],
            ['title' => 'Wanneer', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar tijd.'],
            ['title' => 'Wat', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar een object of situatie.'],
            ['title' => 'Welke', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om een keuze aan te geven.'],
            ['title' => 'Wie', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar een persoon.'],
            ['title' => 'Waar', 'lesson_id' => 1, 'category_id' => '1', 'description' => 'Een vraagwoord om te vragen naar een locatie.'],

            // Les 1 - 2
            ['title' => 'Aanwezig', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Gebruikt om aanwezigheid aan te geven.'],
            ['title' => 'Bedoeling', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Gebruikt om intentie of doel aan te geven.'],
            ['title' => 'Beginnen', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Het starten van een activiteit.'],
            ['title' => 'Boek', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een voorwerp dat wordt gebruikt om te lezen.'],
            ['title' => 'Docent', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een persoon die lesgeeft.'],
            ['title' => 'Student', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een persoon die studeert.'],
            ['title' => 'Huiswerk', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Taken die thuis gemaakt moeten worden.'],
            ['title' => 'Klaar', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Gebruikt om aan te geven dat iets af is.'],
            ['title' => 'Koffie', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een warme drank, vaak gedronken tijdens pauzes.'],
            ['title' => 'Les', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een educatieve sessie.'],
            ['title' => 'Lokaal', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een ruimte waarin les wordt gegeven.'],
            ['title' => 'Makkelijk', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Gebruikt om aan te geven dat iets eenvoudig is.'],
            ['title' => 'Meenemen', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Iets met zich meenemen.'],
            ['title' => 'Moeilijk', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Gebruikt om aan te geven dat iets lastig is.'],
            ['title' => 'Nu', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Aanduiding voor het huidige moment.'],
            ['title' => 'Ook', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Gebruikt om aan te geven dat iets aanvullend is.'],
            ['title' => 'Opdracht', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een taak die uitgevoerd moet worden.'],
            ['title' => 'Pauze', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een korte onderbreking.'],
            ['title' => 'Thee', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een warme drank.'],
            ['title' => 'Thuis', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'De plek waar iemand woont.'],
            ['title' => 'Uitleggen', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een concept verduidelijken.'],
            ['title' => 'Volgende', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Het eerstvolgende item of persoon.'],
            ['title' => 'Voorbeeld', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een representatief geval.'],
            ['title' => 'Voorbereiden', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Iets klaar maken voor gebruik.'],
            ['title' => 'Vorige', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Het voorgaande item of persoon.'],
            ['title' => 'WC', 'lesson_id' => 1, 'category_id' => '2', 'description' => 'Een ruimte met sanitaire voorzieningen.'],

            // Les 1 - 3
            ['title' => 'Achternaam', 'lesson_id' => 1, 'category_id' => '3', 'description' => 'De achternaam van een persoon.'],
            ['title' => 'Voornaam', 'lesson_id' => 1, 'category_id' => '3', 'description' => 'De voornaam van een persoon.'],
            ['title' => 'Naam', 'lesson_id' => 1, 'category_id' => '3', 'description' => 'Een manier om de naam van iemand te vragen of te geven.'],
            ['title' => 'Voorstellen', 'lesson_id' => 1, 'category_id' => '3', 'description' => 'Een handeling waarbij je jezelf of anderen introduceert.'],
            ['title' => 'Welkom', 'lesson_id' => 1, 'category_id' => '3', 'description' => 'Een begroeting die je gebruikt om iemand te verwelkomen.'],

            // Les 1 - 4
            ['title' => 'Gaat het goed', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een vraag om te vragen hoe het gaat.'],
            ['title' => 'Goed', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een antwoord dat aangeeft dat alles in orde is.'],
            ['title' => 'Hallo', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een informele begroeting.'],
            ['title' => 'OK', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een bevestiging dat alles goed is.'],
            ['title' => 'Prima', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een antwoord dat aangeeft dat het goed gaat.'],
            ['title' => 'Tot ziens', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een afscheidsgroet.'],
            ['title' => 'Tot ziens groep', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een afscheidsgroet voor een groep.'],
            ['title' => 'Goedemorgen', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een begroeting die in de ochtend gebruikt wordt.'],
            ['title' => 'Goedemiddag', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een begroeting die in de middag gebruikt wordt.'],
            ['title' => 'Goedeavond', 'lesson_id' => 1, 'category_id' => '4', 'description' => 'Een begroeting die in de avond gebruikt wordt.'],

            ['title' => 'Antwoorden', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Een reactie geven op een vraag.'],
            ['title' => 'Lezen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Iets lezen, bijvoorbeeld tekst.'],
            ['title' => 'Willen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Een wens of verlangen uiten.'],
            ['title' => 'Doen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Een handeling uitvoeren.'],
            ['title' => 'Vergeten', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Iets niet herinneren.'],
            ['title' => 'Zeggen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Een uitspraak doen.'],
            ['title' => 'Geven', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Iets overdragen aan iemand.'],
            ['title' => 'Oefenen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Een vaardigheid herhalen om beter te worden.'],
            ['title' => 'Zitten', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'In een zittende positie zijn.'],
            ['title' => 'Hebben', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Bezit of eigendom van iets hebben.'],
            ['title' => 'Onthouden', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Iets in je geheugen bewaren.'],
            ['title' => 'Vragen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Een vraag stellen.'],
            ['title' => 'Helpen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Assisteren of bijstaan.'],
            ['title' => 'Opruimen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Het netjes maken van een ruimte.'],
            ['title' => 'Kijken', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Je ogen gebruiken om iets te zien.'],
            ['title' => 'Vertellen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Informatie delen door middel van spreken.'],
            ['title' => 'Kunnen / Kan', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Iets in staat zijn te doen.'],
            ['title' => 'Proberen', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Iets proberen uit te voeren.'],
            ['title' => 'Leren', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Nieuwe kennis of vaardigheden verwerven.'],
            ['title' => 'Schrijven', 'lesson_id' => 2, 'category_id' => '5', 'description' => 'Tekst maken met pen of potlood.'],

            // Les 2 - 6
            ['title' => 'Alsjeblieft (iets geven)', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Gebruikt bij het geven van iets aan iemand.'],
            ['title' => 'Klopt', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Bevestigen dat iets juist is.'],
            ['title' => 'Vervelend', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Iets negatiefs of ongemakkelijks aanduiden.'],
            ['title' => 'Alsjeblieft (verzoek)', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Gebruikt bij het doen van een verzoek.'],
            ['title' => 'Klopt-niet', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Bevestigen dat iets niet juist is.'],
            ['title' => 'Vreselijk', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Iets heel erg negatiefs aanduiden.'],
            ['title' => 'Bedankt', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Een uitdrukking van dankbaarheid.'],
            ['title' => 'Leuk', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Een positieve reactie of oordeel geven.'],
            ['title' => 'Ik begrijp het', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Bevestigen dat je iets hebt begrepen.'],
            ['title' => 'Opnieuw', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Iets herhalen of opnieuw doen.'],
            ['title' => 'Ik begrijp het niet', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Bevestigen dat je iets niet hebt begrepen.'],
            ['title' => 'Sorry', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Een verontschuldiging uiten.'],
            ['title' => 'Jammer', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Een uitdrukking van teleurstelling of medeleven.'],
            ['title' => 'Spannend', 'lesson_id' => 2, 'category_id' => '6', 'description' => 'Iets dat een gevoel van spanning oproept.'],

            // Les 2 - 7
            ['title' => 'Bang', 'lesson_id' => 2, 'category_id' => '7', 'description' => 'Een gevoel van angst of vrees.'],
            ['title' => 'Opgelucht', 'lesson_id' => 2, 'category_id' => '7', 'description' => 'Een gevoel van verlichting of ontspanning.'],
            ['title' => 'Blij', 'lesson_id' => 2, 'category_id' => '7', 'description' => 'Een gevoel van vreugde of geluk.'],
            ['title' => 'Verdrietig', 'lesson_id' => 2, 'category_id' => '7', 'description' => 'Een gevoel van droefheid of verlies.'],
            ['title' => 'Boos', 'lesson_id' => 2, 'category_id' => '7', 'description' => 'Een gevoel van woede of frustratie.'],
            ['title' => 'Zenuwachtig', 'lesson_id' => 2, 'category_id' => '7', 'description' => 'Een gevoel van spanning of nervositeit.'],

            // Les 2 - Tellen
            ['title' => '1', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 1.'],
            ['title' => '2', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 2.'],
            ['title' => '3', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 3.'],
            ['title' => '4', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 4.'],
            ['title' => '5', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 5.'],
            ['title' => '6', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 6.'],
            ['title' => '7', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 7.'],
            ['title' => '8', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 8.'],
            ['title' => '9', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 9.'],
            ['title' => '10', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 10.'],
            ['title' => '11', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 11.'],
            ['title' => '12', 'lesson_id' => 2, 'category_id' => '8', 'description' => 'Het cijfer 12.'],

            ['title' => 'Ochtend', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'Het begin van de dag, van zonsopgang tot middag.'],
            ['title' => 'Middag', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'De tijd van de dag tussen de ochtend en avond.'],
            ['title' => 'Avond', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'De tijd van de dag na de middag en voor de nacht.'],
            ['title' => 'Nacht', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'De periode van de dag waarin het donker is, meestal van de avond tot de ochtend.'],
            ['title' => 'Vanavond', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'De komende avond, of de avond van vandaag.'],
            ['title' => 'Vanmorgen', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'De ochtend van vandaag.'],
            ['title' => 'Vanmiddag', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'De middag van vandaag.'],
            ['title' => 'Vannacht', 'lesson_id' => 3, 'category_id' => '9', 'description' => 'De nacht van vandaag.'],

            // Les 3 - 10
            ['title' => 'Januari', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De eerste maand van het jaar.'],
            ['title' => 'Februari', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De tweede maand van het jaar.'],
            ['title' => 'Maart', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De derde maand van het jaar.'],
            ['title' => 'April', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De vierde maand van het jaar.'],
            ['title' => 'Mei', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De vijfde maand van het jaar.'],
            ['title' => 'Juni', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De zesde maand van het jaar.'],
            ['title' => 'Juli', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De zevende maand van het jaar.'],
            ['title' => 'Augustus', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De achtste maand van het jaar.'],
            ['title' => 'September', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De negende maand van het jaar.'],
            ['title' => 'Oktober', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De tiende maand van het jaar.'],
            ['title' => 'November', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De elfde maand van het jaar.'],
            ['title' => 'December', 'lesson_id' => 3, 'category_id' => '10', 'description' => 'De twaalfde maand van het jaar.'],

            // Les 3 - 11
            ['title' => 'Maandag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De eerste dag van de week.'],
            ['title' => 'Dinsdag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De tweede dag van de week.'],
            ['title' => 'Woensdag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De derde dag van de week.'],
            ['title' => 'Donderdag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De vierde dag van de week.'],
            ['title' => 'Vrijdag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De vijfde dag van de week.'],
            ['title' => 'Zaterdag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De zesde dag van de week.'],
            ['title' => 'Zondag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De zevende dag van de week.'],
            ['title' => 'Dag', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'Een periode van 24 uur.'],
            ['title' => 'Maand', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'Een periode van ongeveer vier weken.'],
            ['title' => 'Week', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'Een periode van zeven dagen.'],
            ['title' => 'Weekend', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'De laatste twee dagen van de week, meestal zaterdag en zondag.'],
            ['title' => 'Jaar', 'lesson_id' => 3, 'category_id' => '11', 'description' => 'Een periode van 12 maanden.'],

            // Les 3 - 12
            ['title' => 'Afgesproken', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Een afspraak is bevestigd.'],
            ['title' => 'Gisteren', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'De dag voor vandaag.'],
            ['title' => 'Nadenken', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Het proces van denken om tot een beslissing te komen.'],
            ['title' => 'Afspraak', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Een geplande ontmoeting.'],
            ['title' => 'Eergisteren', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'De dag twee dagen geleden.'],
            ['title' => 'Terug (komen)', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Weer terugkomen op een afspraak of plaats.'],
            ['title' => 'Afspreken', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Een afspraak plannen.'],
            ['title' => 'Het maakt niet uit', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Iets is niet belangrijk of van invloed op de beslissing.'],
            ['title' => 'Vandaag', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'De huidige dag.'],
            ['title' => 'Agenda', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Een overzicht van geplande afspraken.'],
            ['title' => 'Morgen', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'De dag na vandaag.'],
            ['title' => 'Vrij', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Een moment waarin je geen verplichtingen hebt.'],
            ['title' => 'Gelukt', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Wanneer iets is gelukt of succesvol is uitgevoerd.'],
            ['title' => 'Overmorgen', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'De dag na morgen.'],
            ['title' => 'Andere', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'Iets anders dan wat er is genoemd.'],
            ['title' => 'Datum', 'lesson_id' => 3, 'category_id' => '12', 'description' => 'De specifieke dag van een gebeurtenis.'],

            // Les 3 - 1
            ['title' => 'Alg. Vraaggebaar', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een algemeen gebaar voor vragen.'],
            ['title' => 'Waarom', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar de reden of oorzaak.'],
            ['title' => 'Wie', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar een persoon.'],
            ['title' => 'Hoe', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar de manier waarop iets gebeurt.'],
            ['title' => 'Wanneer', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar tijd of datum.'],
            ['title' => 'Waar', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar locatie.'],
            ['title' => 'Hoelang', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar de duur van iets.'],
            ['title' => 'Wat', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar een ding of object.'],
            ['title' => 'Hoe laat?', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar het tijdstip van iets.'],
            ['title' => 'Hoeveel', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar de hoeveelheid of het aantal.'],
            ['title' => 'Welke', 'lesson_id' => 3, 'category_id' => '1', 'description' => 'Een vraag naar een keuze of selectie.'],

            ['title' => '13 t/m 20', 'lesson_id' => 4, 'category_id' => '13', 'description' => '13 van 13 tot 20.'],
            ['title' => 'Cijfer', 'lesson_id' => 4, 'category_id' => '13', 'description' => 'Een symbool voor een getal.'],
            ['title' => '21 t/m 30', 'lesson_id' => 4, 'category_id' => '13', 'description' => '13 van 21 tot 30.'],
            ['title' => 'Datum', 'lesson_id' => 4, 'category_id' => '13', 'description' => 'De specifieke dag, maand en jaar.'],
            ['title' => '20, 30, 40, .. 100', 'lesson_id' => 4, 'category_id' => '13', 'description' => '13 van 20, 30, 40 tot 100.'],
            ['title' => 'Geboren', 'lesson_id' => 4, 'category_id' => '13', 'description' => 'Het moment van geboorte.'],
            ['title' => '22, 33, 44, .. 99', 'lesson_id' => 4, 'category_id' => '13', 'description' => '13 van 22, 33, 44 tot 99.'],
            ['title' => 'Jarig', 'lesson_id' => 4, 'category_id' => '13', 'description' => 'Het vieren van je verjaardag.'],
            ['title' => 'Tellen', 'lesson_id' => 4, 'category_id' => '13', 'description' => 'Het opnoemen van getallen in volgorde.'],
            ['title' => 'Hoe-oud?', 'lesson_id' => 4, 'category_id' => '13', 'description' => 'Vraag naar de leeftijd.'],

            // Les 4 - 14
            ['title' => '1 uur lang, 2 uur lang', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'De tijdsduur van 1 of 2 uur.'],
            ['title' => 'Half uur lang', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'De tijdsduur van een half uur.'],
            ['title' => 'Kwartier', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Een tijdsduur van 15 minuten.'],
            ['title' => '1 uur, 2 uur', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'De tijdsaanduiding van 1 of 2 uur.'],
            ['title' => 'Horloge', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Een apparaat om de tijd mee te meten.'],
            ['title' => 'Later', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Na een bepaalde tijd.'],
            ['title' => '10 minuten over 1/2/3', 'lesson_id' => 4, 'category_id' => '14', 'description' => '10 minuten voorbij het uur van 1, 2, of 3.'],
            ['title' => 'Klok', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Het instrument dat de tijd aangeeft.'],
            ['title' => 'Minuut', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Een tijdseenheid, 60 seconden.'],
            ['title' => '10 minuten voor 1/2/3', 'lesson_id' => 4, 'category_id' => '14', 'description' => '10 minuten voor het uur van 1, 2, of 3.'],
            ['title' => 'Kwart over (rechtshandig)', 'lesson_id' => 4, 'category_id' => '14', 'description' => '15 minuten over een uur, met de klok mee.'],
            ['title' => 'Nooit', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Geen tijd of mogelijkheid voor iets.'],
            ['title' => 'Altijd', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Op elk moment, zonder uitzondering.'],
            ['title' => 'Kwarter over (linkshandig)', 'lesson_id' => 4, 'category_id' => '14', 'description' => '15 minuten over een uur, tegen de klok in.'],
            ['title' => 'Tijd', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Het meten van momenten en uren.'],
            ['title' => 'Eerder', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Een eerder moment in de tijd.'],
            ['title' => 'Kwarter voor (rechtshandig)', 'lesson_id' => 4, 'category_id' => '14', 'description' => '15 minuten voor een uur, met de klok mee.'],
            ['title' => 'Uur', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'Een tijdseenheid van 60 minuten.'],
            ['title' => 'Half 1, Half 2', 'lesson_id' => 4, 'category_id' => '14', 'description' => 'De tijden van half één en half twee.'],
            ['title' => 'Kwarter voor (linkshandig)', 'lesson_id' => 4, 'category_id' => '14', 'description' => '15 minuten voor een uur, tegen de klok in.'],

            ['title' => 'Apotheek', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Een winkel waar medicijnen worden verkocht.'],
            ['title' => 'Gezond (zijn)', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'In goede gezondheid verkeren.'],
            ['title' => 'Tandarts', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Een arts die zich bezighoudt met het verzorgen van tanden.'],
            ['title' => 'Assistente', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Een persoon die ondersteunt in de medische praktijk.'],
            ['title' => 'Huisarts', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Een arts die algemene medische zorg biedt.'],
            ['title' => 'Wachtkamer', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Een kamer waar patiënten wachten op hun afspraak.'],
            ['title' => 'Beter (zijn)', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Gezond zijn na ziekte.'],
            ['title' => 'Medicijnen', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Geneesmiddelen die worden voorgeschreven door een arts.'],
            ['title' => 'Ziek (zijn)', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'In een slechte gezondheid verkeren.'],
            ['title' => 'Beter-gaan', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Verbeteren in gezondheid.'],
            ['title' => 'Patiënt', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Iemand die medische zorg ontvangt.'],
            ['title' => 'Doorverwijzen', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Verwijzen naar een andere arts voor verder onderzoek.'],
            ['title' => 'Recept', 'lesson_id' => 5, 'category_id' => '15', 'description' => 'Een document waarin een arts medicijnen voorschrijft.'],

            // Les 5 - 16
            ['title' => 'Adres', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Het woonadres van iemand.'],
            ['title' => 'Geborenplaats', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'De plaats waar iemand is geboren.'],
            ['title' => 'Telefoonnummer', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Een nummer om iemand telefonisch te bereiken.'],
            ['title' => 'Beroep', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Het werk dat iemand doet.'],
            ['title' => 'Klacht', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Een probleem of ongemak dat iemand heeft.'],
            ['title' => 'Woonplaats', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'De plaats waar iemand woont.'],
            ['title' => 'Dokter', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Een medische professional die iemand behandelt.'],
            ['title' => 'Oorzaak', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'De reden waarom iets gebeurt.'],
            ['title' => 'Zorgverzekering', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Een verzekering voor medische kosten.'],
            ['title' => 'Duur', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Hoe lang iets duurt.'],
            ['title' => 'Operatie', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Een medische ingreep die door een arts wordt uitgevoerd.'],
            ['title' => 'Geboortedatum', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'De datum waarop iemand geboren is.'],
            ['title' => 'Probleem', 'lesson_id' => 5, 'category_id' => '16', 'description' => 'Iets dat niet goed gaat met de gezondheid.'],

            // Les 5 - 17
            ['title' => 'Amsterdam', 'lesson_id' => 5, 'category_id' => '17', 'description' => 'De hoofdstad van Nederland.'],
            ['title' => 'Den Haag', 'lesson_id' => 5, 'category_id' => '17', 'description' => 'De politieke hoofdstad van Nederland.'],
            ['title' => 'Schiedam', 'lesson_id' => 5, 'category_id' => '17', 'description' => 'Een stad in de provincie Zuid-Holland.'],
            ['title' => 'Breda', 'lesson_id' => 5, 'category_id' => '17', 'description' => 'Een stad in het zuiden van Nederland.'],
            ['title' => 'Rotterdam', 'lesson_id' => 5, 'category_id' => '17', 'description' => 'Een grote stad in Zuid-Holland.'],
            ['title' => 'Zoetermeer', 'lesson_id' => 5, 'category_id' => '17', 'description' => 'Een stad in Zuid-Holland, nabij Den Haag.'],

            // Les 5 - 18
            ['title' => 'Gezin', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'De mensen die samen in een huishouden wonen.'],
            ['title' => 'Familie', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'De mensen die verwant zijn door bloed of huwelijk.'],
            ['title' => 'Vader', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'De mannelijke ouder van een kind.'],
            ['title' => 'Moeder', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'De vrouwelijke ouder van een kind.'],
            ['title' => 'Ouders', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'De vader en moeder van een kind.'],
            ['title' => 'Zoon', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'Een mannelijke nakomeling van ouders.'],
            ['title' => 'Dochter', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'Een vrouwelijke nakomeling van ouders.'],
            ['title' => 'Kind', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'Een nakomeling van ouders, een jong persoon.'],
            ['title' => 'Kinderen', 'lesson_id' => 5, 'category_id' => '18', 'description' => 'Meerdere nakomelingen van ouders.'],

            // Les 5 - 19
            ['title' => 'Getrouwd', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'In een huwelijk met iemand.'],
            ['title' => 'Samenwonen', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'Met iemand in hetzelfde huis wonen zonder te trouwen.'],
            ['title' => 'Vrijgezel', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'Niet getrouwd of in een relatie.'],
            ['title' => 'Vrouw (relatie)', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'De vrouwelijke partner in een relatie.'],
            ['title' => 'Vrouw (platonisch)', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'Een vrouw met wie je geen romantische relatie hebt.'],
            ['title' => 'Man (relatie)', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'De mannelijke partner in een relatie.'],
            ['title' => 'Man (platonisch)', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'Een man met wie je geen romantische relatie hebt.'],
            ['title' => 'Vriend (relatie)', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'Een mannelijke vriend met wie je een romantische relatie hebt.'],
            ['title' => 'Vriend (platonisch)', 'lesson_id' => 5, 'category_id' => '19', 'description' => 'Een mannelijke vriend met wie je geen romantische relatie hebt.'],

            ['title' => 'Ademen', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'De handeling van lucht in- en uit de longen brengen.'],
            ['title' => 'Braken / Overgeven', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het spontaan uitwerpen van voedsel of vloeistof uit de maag.'],
            ['title' => 'Mammografie', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een röntgenonderzoek van de borsten.'],
            ['title' => 'Behandeling / Behandelen', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het verzorgen of genezen van een ziekte of aandoening.'],
            ['title' => 'Breuk / Gebroken', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een breuk in een bot, meestal door een ongeluk.'],
            ['title' => 'Misselijk (zijn)', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het gevoel van willen overgeven.'],
            ['title' => 'Bewegen / Beweging', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het verplaatsen van het lichaam of delen ervan.'],
            ['title' => 'Kneuzen / Gekneusd', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een blessure door druk of een klap, zonder dat het bot gebroken is.'],
            ['title' => 'Onderzoek', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een procedure om iets te ontdekken, zoals medische tests.'],
            ['title' => 'Biopsie', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het nemen van een klein stukje weefsel voor verder onderzoek.'],
            ['title' => 'Controle', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het nakijken van iets om de status te beoordelen.'],
            ['title' => 'Ontspannen (zijn)', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Minder gespannen of gestrest zijn.'],
            ['title' => 'Bloed', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het vloeistof dat door het lichaam stroomt, inclusief zuurstof en voedingsstoffen.'],
            ['title' => 'Dizelig (zijn)', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het gevoel van duizeligheid of onvastheid.'],
            ['title' => 'Pijn', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een onaangenaam gevoel dat door schade aan het lichaam wordt veroorzaakt.'],
            ['title' => 'Bloeddruk', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'De druk die het bloed uitoefent op de wanden van de bloedvaten.'],
            ['title' => 'Echo', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een medisch onderzoek waarbij geluidsgolven worden gebruikt om beelden van organen te maken.'],
            ['title' => 'Pijn...', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een andere vorm van pijn die specifiek wordt genoemd.'],
            ['title' => 'Bloeddruk: Hoog', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Wanneer de bloeddruk te hoog is.'],
            ['title' => 'Flauwvallen', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het tijdelijk verliezen van bewustzijn.'],
            ['title' => 'Röntgenfoto', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Een foto van het lichaam die door middel van röntgenstralen wordt genomen.'],
            ['title' => 'Bloeddruk: Laag', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Wanneer de bloeddruk te laag is.'],
            ['title' => 'Hoofdpijn', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Pijn die wordt gevoeld in het hoofd of de nek.'],
            ['title' => 'Therapie', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Behandeling van een ziekte of aandoening met medicatie of andere technieken.'],
            ['title' => 'Jeuk (hebben) / Jeuken', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'Het gevoel dat je huid prikt en je wilt krabben.'],
            ['title' => 'Uitslag (onderzoek)', 'lesson_id' => 6, 'category_id' => '20', 'description' => 'De resultaten van een medisch onderzoek.'],

            // Les 6 - 21
            ['title' => 'Gips', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een hard materiaal dat gebruikt wordt om een gebroken bot te stabiliseren.'],
            ['title' => 'Ontlasting / Poep', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'De afvalstoffen die het lichaam verlaat na spijsvertering.'],
            ['title' => 'Verband', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Materiaal dat wordt gebruikt om een wond te bedekken en te beschermen.'],
            ['title' => 'Hechten / Hechting', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Het dichten van een wond met behulp van naald en draad.'],
            ['title' => 'Operatie / Opereren', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een medische ingreep om iets te behandelen of te verhelpen.'],
            ['title' => 'Verpleegkundige', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een zorgverlener die medische en verplegende zorg biedt.'],
            ['title' => 'Infuus', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een apparaat dat vloeistoffen in het lichaam brengt via een ader.'],
            ['title' => 'Plassen / Plas', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Het lozen van urine uit het lichaam.'],
            ['title' => 'Warm (zijn)', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een verhoogde lichaamstemperatuur hebben.'],
            ['title' => 'Koorts', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een verhoogde lichaamstemperatuur, vaak door ziekte.'],
            ['title' => 'Poepen', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Het proces van het uitscheiden van ontlasting.'],
            ['title' => 'WC', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een toilet, vaak in ziekenhuizen.'],
            ['title' => 'Koud (hebben) / Kou', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een lage lichaamstemperatuur hebben of koud aanvoelen.'],
            ['title' => 'Slapen', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'In rust verkeren, een periode van slaap.'],
            ['title' => 'Ziekenhuis', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een instelling waar medische zorg wordt verleend.'],
            ['title' => 'Lopen', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Het verplaatsen van het lichaam door middel van lopen.'],
            ['title' => 'Slecht', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'In een slechte toestand verkeren, fysiek of mentaal.'],
            ['title' => 'Chirurg', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een arts die gespecialiseerd is in operaties.'],
            ['title' => 'Narcosis', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een vorm van anesthesie waarbij het bewustzijn wordt verlaagd.'],
            ['title' => 'Staan', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Rechtop staan, het tegenovergestelde van zitten of liggen.'],
            ['title' => 'Eerste Hulp', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'De eerste zorg die wordt geboden bij een ongeval of plotselinge ziekte.'],
            ['title' => 'Nuchtere maag', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een maag die leeg is van voedsel of drinken.'],
            ['title' => 'Temperatuur', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'De lichaamstemperatuur van iemand.'],
            ['title' => 'Specialist', 'lesson_id' => 6, 'category_id' => '21', 'description' => 'Een arts die gespecialiseerd is in een bepaald medisch gebied.'],

            ['title' => 'Al', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'De situatie is al gebeurd of klaar.'],
            ['title' => 'Mogen: Mag-wel', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Iets is toegestaan of geoorloofd.'],
            ['title' => 'Water', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Vloeistof, essentieel voor het leven.'],
            ['title' => 'Ambulance', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Een voertuig voor medische noodsituaties.'],
            ['title' => 'Mogen: Mag-niet', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Iets is niet toegestaan of geoorloofd.'],
            ['title' => 'Weinig / Beetje', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Een kleine hoeveelheid van iets.'],
            ['title' => 'Bezorgd / Zorgen-maken', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Zich zorgen maken om iets of iemand.'],
            ['title' => 'Over (gaan) x', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Een situatie of probleem dat voorbij is.'],
            ['title' => 'Drinken', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Het in je mond nemen van vloeistof.'],
            ['title' => 'Overleden (zijn)', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Iemand die gestorven is.'],
            ['title' => 'Eten', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Het consumeren van voedsel.'],
            ['title' => 'Rustig (zijn) x', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'In een kalme toestand verkeren.'],
            ['title' => 'Gaan (naar)', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Verplaatsen naar een andere plaats.'],
            ['title' => 'Suikerziekte', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Een aandoening waarbij het lichaam problemen heeft met het reguleren van bloedsuiker.'],
            ['title' => 'Hongeren-hebben', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Het gevoel van honger hebben.'],
            ['title' => 'Veel', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Een grote hoeveelheid van iets.'],
            ['title' => 'Huis', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'De plek waar iemand woont.'],
            ['title' => 'Vervelend (zijn)', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Iets wat onaangenaam is.'],
            ['title' => 'Komen: Komt goed', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Een geruststelling dat alles in orde zal komen.'],
            ['title' => 'Wachten', 'lesson_id' => 7, 'category_id' => '22', 'description' => 'Tijd doorbrengen in afwachting van iets.'],

            // Les 7 - 23
            ['title' => 'Arm', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het bovenste ledemaat, van schouder tot hand.'],
            ['title' => 'Hoofd', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het bovenste deel van het lichaam, waarin de hersenen zich bevinden.'],
            ['title' => 'Ribben', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'De botten die de borstkas omgeven en de vitale organen beschermen.'],
            ['title' => 'Anus', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'De opening van het lichaam waar ontlasting het lichaam verlaat.'],
            ['title' => 'Keel', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gedeelte van het lichaam tussen de mond en de slokdarm.'],
            ['title' => 'Rug', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het achterste deel van het bovenlichaam.'],
            ['title' => 'Been', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het onderste ledemaat dat het lichaam ondersteunt.'],
            ['title' => 'Knie', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gewricht tussen het bovenbeen en het onderbeen.'],
            ['title' => 'Schouder', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gewricht dat de arm aan het lichaam verbindt.'],
            ['title' => 'Billen', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'De achterste delen van het lichaam.'],
            ['title' => 'Mond', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het lichaamsdeel waarmee we eten en spreken.'],
            ['title' => 'Tand', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Een harde structuur in de mond die wordt gebruikt voor het malen van voedsel.'],
            ['title' => 'Borst', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gebied van het lichaam dat het hart en de longen beschermt.'],
            ['title' => 'Nagel', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het harde materiaal aan de uiteinden van de vingers en tenen.'],
            ['title' => 'Teen', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'De uiteinden van de voeten.'],
            ['title' => 'Borst vrouw', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het vrouwelijk deel van het bovenlichaam, bevat de borsten.'],
            ['title' => 'Nek', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gedeelte van het lichaam dat het hoofd met de rest van het lichaam verbindt.'],
            ['title' => 'Vagina', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het vrouwelijke voortplantingsorgaan.'],
            ['title' => 'Enkel', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gewricht tussen de voet en het been.'],
            ['title' => 'Neus', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het orgaan voor ademhaling en geur.'],
            ['title' => 'Vinger', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'De ledematen aan de handen, gebruikt voor grip en aanraking.'],
            ['title' => 'Buik', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gedeelte van het lichaam waarin de organen van de spijsvertering zich bevinden.'],
            ['title' => 'Oog', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het orgaan voor het waarnemen van visuele prikkels.'],
            ['title' => 'Voet', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het onderste deel van het been dat het lichaam ondersteunt.'],
            ['title' => 'Elleboog', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gewricht tussen de bovenarm en de onderarm.'],
            ['title' => 'Oor', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het orgaan voor gehoor en evenwicht.'],
            ['title' => 'Wang', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'De zijkanten van het gezicht, naast de neus.'],
            ['title' => 'Gezicht', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het voorste gedeelte van het hoofd, met de ogen, neus, mond, enz.'],
            ['title' => 'Penis', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het mannelijke voortplantingsorgaan.'],
            ['title' => 'Haar', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'De haartjes op het hoofd of lichaam.'],
            ['title' => 'Pols', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het gewricht tussen de hand en de arm.'],
            ['title' => 'Hand', 'lesson_id' => 7, 'category_id' => '23', 'description' => 'Het orgaan voor grijpen en manipuleren van objecten.'],

            // Les 7 - 24
            ['title' => 'Alvleesklier', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Een orgaan dat helpt bij de spijsvertering en bloedsuikerregulatie.'],
            ['title' => 'Eierstokken', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'De vrouwelijke voortplantingsorganen die eieren produceren.'],
            ['title' => 'Longen', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'De organen die verantwoordelijk zijn voor ademhaling.'],
            ['title' => 'Baarmoeder', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het vrouwelijke voortplantingsorgaan waar de baby zich ontwikkelt.'],
            ['title' => 'Endeldarm', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het laatste gedeelte van de dikke darm.'],
            ['title' => 'Maag', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan waar voedsel wordt afgebroken door zuren en enzymen.'],
            ['title' => 'Blas', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan dat urine opslaat.'],
            ['title' => 'Hart', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan dat bloed door het lichaam pompt.'],
            ['title' => 'Organe', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Algemene term voor elk functioneel deel van het lichaam.'],
            ['title' => 'Darmen', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'De organen die het voedsel verteren en absorbereren van voedingsstoffen.'],
            ['title' => 'Hersenen', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan dat verantwoordelijk is voor het denken en het coördineren van het lichaam.'],
            ['title' => 'Slokdarm', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan dat voedsel naar de maag brengt.'],
            ['title' => 'Dikke-darm', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het gedeelte van de darm dat verantwoordelijk is voor waterabsorptie.'],
            ['title' => 'Huid', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan dat het lichaam beschermt en bedekt.'],
            ['title' => 'Spier', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Weefsel dat het lichaam in staat stelt te bewegen.'],
            ['title' => 'Dunne-darm', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan waar de meeste spijsvertering en absorptie van voedingsstoffen plaatsvinden.'],
            ['title' => 'Lever', 'lesson_id' => 7, 'category_id' => '24', 'description' => 'Het orgaan dat betrokken is bij de stofwisseling en ontgifting.']

        ];






















        return [
            'title' => 'Naam',
            'image' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'description' => $this->faker->sentence,
            'lesson_id' => Lesson::factory(),
            // Door dat je Lesson::factory gebruikt zal
            // die automatisch een rij aanmaken met een naam en gaat tie automatisch de id gebruiken.
            'category_id' => Category::factory(), // Zorg dat CategoryFactory bestaat
            // De comments gelden ook voor deze id maar ook voor andere factories.
        ];
    }
}
