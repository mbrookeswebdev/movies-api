<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        $movie = new App\Movie([
            'id' => 1,
            'title' => 'Solo: A Star Wars Story',
            'descr' => 'During an adventure into the criminal underworld Han Solo meets his future co-pilot Chewbacca and encounters Lando Calrissian years before joining the Rebellion.',
            'rating' => '12A',
            'imdb_score' => '7.0',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 2,
            'title' => 'A Star Is Born',
            'descr' => 'A musician helps a young singer find fame even as age and alcoholism send his own career into a downward spiral.',
            'rating' => '15',
            'imdb_score' => '8',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 3,
            'title' => 'A Quiet Place',
            'descr' => 'In a post-apocalyptic world a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.',
            'rating' => '15',
            'imdb_score' => '7.6',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 4,
            'title' => 'Deadpool 2',
            'descr' => 'Foul-mouthed mutant mercenary Wade Wilson brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal time-traveling cyborg.',
            'rating' => '15',
            'imdb_score' => '7.8',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 5,
            'title' => 'Widows',
            'descr' => 'Four women with nothing in common except a debt left behind by their dead husbands\' criminal activities take fate into their own hands.',
            'rating' => '15',
            'imdb_score' => '7.3',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 6,
            'title' => 'Avengers: Infinity Wars',
            'descr' => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
            'rating' => '12A',
            'imdb_score' => '8.5',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 7,
            'title' => 'Incredibles 2',
            'descr' => 'The Incredibles hero family takes on a new mission, which involves a change in family roles: Mr Incredible must manage the house while his wife goes out to save the world.',
            'rating' => 'PG',
            'imdb_score' => '7.8',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 8,
            'title' => 'Black Panther',
            'descr' => 'T\'Challa, heir to the hidden but advanced kingdom of Wakanda must step forward to lead his people into a new future and must confront a challenger from his country\'s past',
            'rating' => '12A',
            'imdb_score' => '7.4',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 9,
            'title' => 'Isle Of Dogs',
            'descr' => 'Set in Japan, Isle of Dogs follows a boy\'s odyssey in search of his lost dog.',
            'rating' => 'PG',
            'imdb_score' => '7.9',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 10,
            'title' => 'Jurassic World: Fallen Kingdom',
            'descr' => 'When the island\'s dormant volcano begins roaring to life, Owen and Claire mount a campaign to rescue the remaining dinosaurs from this extinction-level event.',
            'rating' => '12A',
            'imdb_score' => '6.2',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 11,
            'title' => 'Ready Player One',
            'descr' => 'When the creator of a virtual reality world called the OASIS dies, a video is released in which he challenges all OASIS users to find an Easter Egg, which will give the finder his fortune.',
            'rating' => '12A',
            'imdb_score' => '7.5',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 12,
            'title' => 'Venom',
            'descr' => 'A failed reporter is bonded to an alien entity, one of many who have invaded Earth. The entity takes a liking to Earth and decides to protect it.',
            'rating' => '15',
            'imdb_score' => '6.8',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 13,
            'title' => 'Bumblebee',
            'descr' => 'In the year of 1987 Bumblebee finds refuge in a junkyard in a small Californian town where he befriends a girl named Charlie.',
            'rating' => 'PG',
            'imdb_score' => '7.2',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 14,
            'title' => 'The Meg',
            'descr' => 'After escaping an attack by what he claims was a 70-foot shark, Jonas Taylor must confront his fears to save those trapped in a sunken submersible.',
            'rating' => '12A',
            'imdb_score' => '5.7',
            'noOfVotes' => '0']);
        $movie->save();

        $movie = new App\Movie([
            'id' => 15,
            'title' => 'Aquaman',
            'descr' => 'Arthur Curry the human-born heir to the underwater kingdom of Atlantis goes on a quest to prevent a war between the worlds of ocean and land.',
            'rating' => 'PG-13',
            'imdb_score' => '7.5',
            'noOfVotes' => '0']);
        $movie->save();
    }
}
