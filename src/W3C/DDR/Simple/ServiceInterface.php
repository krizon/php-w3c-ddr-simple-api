<?php

namespace W3C\DDR\Simple;

use W3C\DDR\Simple\Exception\InitializationException;
use W3C\DDR\Simple\Exception\NameException;

interface ServiceInterface
{
    const NOT_SUPPORTED = "__NOT_SUPPORTED";

    /**
     * @abstract
     * @param string $defaultVocabularyIRI
     * @param $props
     * @return mixed
     */
    function initialize($defaultVocabularyIRI, $props);

    /**
     * @abstract
     * @return string
     */
    function getImplementationVersion();

    /**
     * @abstract
     * @return string
     */
    function getDataVersion();

    /**
     * @abstract
     * @return PropertyRefInterface[]
     */
    function listPropertyRefs();

    /**
     * @abstract
     * @param EvidenceInterface $evidence
     * @param PropertyRefInterface $propertyRef
     * @param PropertyNameInterface $propertyName
     * @param null|string $localPropertyName
     * @param null|string $localAspectName
     * @param null|string $vocabularyIRI
     * @return PropertyValueInterface
     */
    function getPropertyValue
    (
        EvidenceInterface $evidence,
        PropertyRefInterface $propertyRef = null ,
        PropertyNameInterface $propertyName = null,
        $localPropertyName = null,
        $localAspectName = null,
        $vocabularyIRI = null
    );

    /**
     * @abstract
     * @param EvidenceInterface $evidence
     * @param array $propertyRefs
     * @param null|string $localAspectName
     * @param null|string $vocabularyIRI
     * @return PropertyValuesInterface
     */
    function getPropertyValues(EvidenceInterface $evidence, array $propertyRefs = null, $localAspectName = null, $vocabularyIRI = null);

    /**
     * @abstract
     * @param $localPropertyName
     * @param null|string $vocabularyIRI
     * @param null|string $localPropertyName
     * @return PropertyNameInterface
     */
    function newPropertyName($localPropertyName, $vocabularyIRI = null, $localPropertyName = null);

    /**
     * @abstract
     * @param PropertyNameInterface $propertyName
     * @param null|string $localAspectName
     * @return PropertyRefInterface
     */
    function newPropertyRef(PropertyNameInterface $propertyName, $localAspectName = null);

    /**
     * @abstract
     * @param null|string $map
     * @return EvidenceInterface
     */
    function newHTTPEvidence($map = null);
}