<?php

namespace W3C\DDR\Simple;

interface ServiceInterface
{
    public function initialize();

    /**
     * @return string
     */
    public function getDataVersion();

    /**
     * @return string
     */
    public function getImplementationVersion();

    /**
     * @return PropertyRefInterface[]
     */
    public function listPropertyRefs();

    /**
     * @param EvidenceInterface $evidence
     * @param string|PropertyRefInterface|PropertyNameInterface $prop
     * @param null|string $localAspectName
     * @param null|string $vocabularyIRI
     * @return PropertyValueInterface
     *
     * @todo how to port java method overloading declarations to php declaration (see phpcr)
     * @note changed interface
     */
    public function getPropertyValue(EvidenceInterface $evidence, $property, $localAspectName = null, $vocabularyIRI = null);

    /**
     * @param EvidenceInterface $evidence
     * @param null|string|PropertyRefInterface $propRefOrLocalAspectName
     * @param null|string $vocabularyIRI
     * @return PropertyValuesInterface
     *
     * @todo how to port java method overloading declarations to php declaration (see phpcr)
     * @note changed interface
     */
    public function getPropertyValues(EvidenceInterface $evidence, $propRefOrLocalAspectName = null, $vocabularyIRI = null);

    /**
     * @param string $map
     * @return EvidenceInterface
     */
    public function newHTTPEvidence($map);

    /**
     * @param string $localPropertyName
     * @param null|string $vocabularyIRI
     * @return PropertyNameInterface
     */
    public function newPropertyName($localPropertyName, $vocabularyIRI = null);

    /**
     * @param string|PropertyNameInterface $propertyName
     * @param null|string $localAspectName
     * @return PropertyRefInterface
     *
     * @note changed interface
     */
    public function newPropertyRef($propertyName, $localAspectName = null);
}