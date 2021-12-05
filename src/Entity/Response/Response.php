<?php

namespace Apiship\Entity\Response;

use Apiship\Entity\AbstractResponse;
use Apiship\Entity\Response\Part\Lists\Provider;

class Response extends AbstractResponse
{
    /**
     * @var array[] Массив результатов
     */
    protected $results = [];

    /**
     * @return array[]|null
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param array[] $results
     *
     * @return Response
     */
    public function setResults($results)
    {
        foreach ($results as $result) {
            $this->addResult($result);
        }

        return $this;
    }

    /**
     * @param $result
     *
     * @return Response
     */
    public function addResult($result)
    {
        $this->results[] = $result;
        return $this;
    }
}