[![Version](http://img.shields.io/packagist/v/bit3/service-aware-bundle.svg?style=flat-square)](https://packagist.org/packages/bit3/service-aware-bundle)
[![Stable Build Status](http://img.shields.io/travis/bit3/service-aware-bundle/master.svg?style=flat-square)](https://travis-ci.org/bit3/service-aware-bundle)
[![Upstream Build Status](http://img.shields.io/travis/bit3/service-aware-bundle/develop.svg?style=flat-square)](https://travis-ci.org/bit3/service-aware-bundle)
[![License](http://img.shields.io/packagist/l/bit3/service-aware-bundle.svg?style=flat-square)](https://github.com/bit3/service-aware-bundle/blob/master/LICENSE)
[![Downloads](http://img.shields.io/packagist/dt/bit3/service-aware-bundle.svg?style=flat-square)](https://packagist.org/packages/bit3/service-aware-bundle)

Service Aware Bundle
====================

Create services with dependencies may result in a lot of duplicated meta code.
For example:

```yaml
service:
    service_foo:
        class: Acme\DemoBundle\Service\Foo
        calls:
            - [setEntityManager, [@doctrine.orm.default_entity_manager]]
            - [setTranslator, [@translator]]
            
    service_bar:
        class: Acme\DemoBundle\Service\Bar
        calls:
            - [setTranslator, [@translator]]
            - [setValidator, [@validator]]
            
    service_zap:
        class: Acme\DemoBundle\Service\Zap
        calls:
            - [setEntityManager, [@doctrine.orm.default_entity_manager]]
            - [setTranslator, [@translator]]
            - [setValidator, [@validator]]
```

And in the classes:

```php
namespace Acme\DemoBundle\Service;

class Foo {
    private $entityManager;
    private $translator;
    
    public function setEntityManager($entityManager) {
        $this->entityManager = $entityManager;
    }
    
    public function setTranslator($translator) {
        $this->translator = $translator;
    }
}
```

```php
namespace Acme\DemoBundle\Service;

class Bar {
    private $translator;
    private $validator;
    
    public function setTranslator($translator) {
        $this->translator = $translator;
    }
    
    public function setValidator($validator) {
        $this->validator = $validator;
    }
}
```

```php
namespace Acme\DemoBundle\Service;

class Zap {
    private $entityManager;
    private $translator;
    private $validator;
    
    public function setEntityManager($entityManager) {
        $this->entityManager = $entityManager;
    }
    
    public function setTranslator($translator) {
        $this->translator = $translator;
    }
    
    public function setValidator($validator) {
        $this->validator = $validator;
    }
}
```

This bundle help you to avoid to define all the setters calls and implementations.
It provide a lot of `*Aware` interfaces, abstract base classes and traits.

How to use
----------

Using the bundle is simple, you only need to implement the interfaces
and remove the setter calls from the `services.yml`.

```yaml
service:
    service_foo:
        class: Acme\DemoBundle\Service\Foo
            
    service_bar:
        class: Acme\DemoBundle\Service\Bar
            
    service_zap:
        class: Acme\DemoBundle\Service\Zap
```

And in the classes:

```php
namespace Acme\DemoBundle\Service;

use Bit3\Symfony\ServiceAwareBundle\Doctrine\DoctrineBundle\EntityManagerAwareInterface;
use Bit3\Symfony\ServiceAwareBundle\Doctrine\DoctrineBundle\EntityManagerAwareTrait;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator\TranslatorAwareInterface;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator\TranslatorAwareTrait;

class Foo implements EntityManagerAwareInterface, TranslatorAwareInterface {
    use EntityManagerAwareTrait;
    use TranslatorAwareTrait;
}
```

```php
namespace Acme\DemoBundle\Service;

use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator\TranslatorAwareInterface;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator\TranslatorAwareTrait;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Validator\ValidatorAwareInterface;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Validator\ValidatorAwareTrait;

class Bar implements EntityManagerAwareInterface, TranslatorAwareInterface, ValidatorAwareInterface {
    use TranslatorAwareTrait;
    use ValidatorAwareTrait;
}
```

```php
namespace Acme\DemoBundle\Service;

use Bit3\Symfony\ServiceAwareBundle\Doctrine\DoctrineBundle\EntityManagerAwareInterface;
use Bit3\Symfony\ServiceAwareBundle\Doctrine\DoctrineBundle\EntityManagerAwareTrait;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator\TranslatorAwareInterface;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator\TranslatorAwareTrait;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Validator\ValidatorAwareInterface;
use Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Validator\ValidatorAwareTrait;

class Zap implements EntityManagerAwareInterface, TranslatorAwareInterface, ValidatorAwareInterface {
    use EntityManagerAwareTrait;
    use TranslatorAwareTrait;
    use ValidatorAwareTrait;
}
```

Pretty simple, huh?

Define service aware's
----------------------

You can define your own service aware interfaces in your `app/config/config.yml`.

```yaml
service_aware:
  services:
    acme_demo_bundle.services.service_foo:
      interface: "Acme\DemoBundle\Service\FooAwareInterface"
      method:    "setServiceFoo"
      service:   "acme_demo_bundle.service_foo"
```
