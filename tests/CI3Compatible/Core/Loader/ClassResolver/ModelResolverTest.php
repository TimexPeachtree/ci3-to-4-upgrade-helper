<?php

declare(strict_types=1);

namespace Kenjis\CI3Compatible\Core\Loader\ClassResolver;

use Kenjis\CI3Compatible\TestCase;

class ModelResolverTest extends TestCase
{
    public function test_model_name_is_string(): void
    {
        $resolver = new ModelResolver();

        $classname = $resolver->resolve('news_model');

        $this->assertSame('App\Models\News_model', $classname);
    }
}