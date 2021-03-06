<?php

namespace RubenVanErk\TopLoggerPhpSdk\Endpoints;

use stdClass;

final class Gyms extends Endpoint
{
    public function all(): array
    {
        return $this->get('/gyms');
    }

    public function find(int|string $id): stdClass
    {
        return $this->get('/gyms/' . $id);
    }

    public function climbs(int|string $gymId): Endpoint
    {
        $this->currentUri = '/gyms/' . $gymId . '/climbs';
        return $this;
    }

    public function rankedAthletes(int|string $gymId): Endpoint
    {
        $this->currentUri = '/gyms/' . $gymId . '/ranked_users';
        return $this;
    }
}