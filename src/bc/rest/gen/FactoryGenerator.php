<?php
namespace bc\rest\gen;


use gossi\codegen\model\PhpClass;
use gossi\docblock\Docblock;
use gossi\docblock\tags\TagFactory;
use gossi\swagger\Schema;
use gossi\swagger\Swagger;

class FactoryGenerator {

    /** @var Swagger */
    private $swagger;

    /** @var PhpClass[] */
    private $factories;

    /** @var  string */
    private $namespace;

    public function __construct(Swagger $swagger, $namespace) {
        $this->swagger = $swagger;
        $this->namespace = $namespace;
        $this->createFactories();
    }

    private function createFactories() {
        $this->factories = [];

        $defs = $this->swagger->getDefinitions();

        /** @var Schema $def */
        foreach ($defs as $name => $def) {
            if(isset($this->factories[$name])) continue;
            if($def->getType() != 'object') continue;

            $ns = $this->namespace.'\\Factories';

            $dataMap = new PhpClass($name . 'Factory');
            $dataMap
                ->setNamespace($ns)
                ->setLongDescription($def->getDescription())
                ->setDescription('Class '.$name . 'Factory')
                ->setDocblock(
                    Docblock::create()
                        ->appendTag(TagFactory::create('package', $ns))
                        ->appendTag(TagFactory::create('method', $name . ' get($id)'))
                        ->appendTag(TagFactory::create('method', $name . ' getAll()'))
                        ->appendTag(TagFactory::create('method', $name . ' getList($ids)'))
                        ->appendTag(TagFactory::create('method', $name . ' getPartial($offset, $count)'))
                )
                ->setParentClassName('Factory')

            ;

            $this->factories[$name] = $dataMap;
        }
    }

    public function getAll() {
        return $this->factories;
    }
}