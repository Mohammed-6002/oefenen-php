<?php
class Gebruiker {
    public int $id;
    public string $gebruikersnaam;
    public string $wachtwoord;

    public function checkWachtwoord(string $input): bool {
        return $this->wachtwoord === $input;
    }
}
