<?php

namespace Jossephus\MakeResponsable\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeResponsableCommand extends GeneratorCommand
{
    protected $name = 'make:responsable';

    protected $description =  'Create a new Responsable Class';
    
    public function getStub()
    {
        return __DIR__ . '/../../stubs/ResponsableClass.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '/Http/Responses';
    }
}
