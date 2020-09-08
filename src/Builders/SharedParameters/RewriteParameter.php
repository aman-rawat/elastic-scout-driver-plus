<?php declare(strict_types=1);

namespace ElasticScoutDriverPlus\Builders\SharedParameters;

trait RewriteParameter
{
    /**
     * @var string|null
     */
    private $fuzzyRewrite;

    public function fuzzyRewrite(string $rewrite): self
    {
        $this->fuzzyRewrite = $rewrite;
        return $this;
    }
}