<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller {


    private $terms_a;
    private $terms_b;
    private $your_terms;

    public function __construct() {

        $this->terms_a = array(

            'Absurd',
            '“Abuse of Power“',
            'Administration',
            'Allegations',
            'Allegedly',
            'Ambassador',
            'The American People',
            'Argument',
            'Articles',
            'Bipartisan',
            'Bully',
            'Burisma',
            'Campaign',
            'Classified',
            'Congress',
            'Conspiracy',
            'Counsel',
            'Cover-Up',
            'The Constitution',
            'Conviction',
            'Corruption',
            'Debate',
            'Democrats',
            'Deposition',
            'Documents',
            'Drug Deal',
            'Election',
            'Evidence',
            'Executive Privilege',
            'Favor',
            'Farce',
            'Fake News',
            'Freedom',
            '“Get Over It“',
            'High Crimes',
            '“I Want Nothing“',
            'Immunity',
            'Impeachment',
            'Inquiry',
            'Intelligence',
            'Investigation',
            'Liberty',
            'Managers',
            'Military Aid',
            'Misdemeanors',
            'Mockery',
            '“Mr. Trump“',
            '“My Colleague“',
            'National Security',
            '“No Collusion“',
            '“No Quid Pro Quo“',
            '“Obstruction of Justice“',
            'Oversight',
            'Perjury',
            '“Perfect Phone Call“',
            'Redacted',
            'Republicans',
            'Russia',
            'Scheme',
            'Sham',
            'Senate',
            'State Department',
            'Subpoena',
            'Testimony',
            '“To Be Clear“',
            'Transcript',
            'Transparency',
            'Trial',
            'Ukraine',
            'Unconstitutional',
            'Whistleblower',
            'White House',
            'Witness',
        );

        $this->terms_b = $this->terms_a;

        $this->your_terms[0] = array();
        $this->your_terms[1] = array();

    }

    public function index() {

        for ($x = 0; $x < 24; $x++) {

            $rand = rand(0, (count($this->terms_a) - 1));

            $term = array_splice($this->terms_a, $rand, 1);

            array_push($this->your_terms[0], $term[0]);

        }

        for ($x = 0; $x < 24; $x++) {

            $rand = rand(0, (count($this->terms_b) - 1));

            $term = array_splice($this->terms_b, $rand, 1);

            array_push($this->your_terms[1], $term[0]);

        }

        return view('card', ['terms' => $this->your_terms]);
    }
}
