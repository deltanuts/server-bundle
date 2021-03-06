<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Users
 *
 * Example access users
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Model;

/**
 * Interface abstracting model access.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function modelName();

    /**
     * Array of property to mappings.
     *
     * @return array[]
     */
    public function modelAttributes();

    /**
     * Validate all the properties in the model
     *
     * Return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function isValid();
}


