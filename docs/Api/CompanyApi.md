# Sufel\Client\CompanyApi

All URIs are relative to *http://sufel.net/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument**](CompanyApi.md#addDocument) | **POST** /company/documents | Agrega nuevo documento.
[**authCompany**](CompanyApi.md#authCompany) | **POST** /company/auth | Autentificacion de Empresa
[**changePassword**](CompanyApi.md#changePassword) | **POST** /company/change-password | Cambia la contraseña de la Empresa
[**creteCompany**](CompanyApi.md#creteCompany) | **POST** /companies | Crea nueva Empresa
[**darBajaDocument**](CompanyApi.md#darBajaDocument) | **PATCH** /company/documents | Da de baja documento.
[**getDocuments**](CompanyApi.md#getDocuments) | **GET** /company/documents | Lista los documentos del emisor


# **addDocument**
> \Sufel\Client\Model\FilesDocument addDocument($body)

Agrega nuevo documento.

Registra nuevo documento para consulta del cliente.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sufel\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sufel\Client\Model\FilesDocument(); // \Sufel\Client\Model\FilesDocument | Archivos del documento electrónico.

try {
    $result = $apiInstance->addDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->addDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sufel\Client\Model\FilesDocument**](../Model/FilesDocument.md)| Archivos del documento electrónico. |

### Return type

[**\Sufel\Client\Model\FilesDocument**](../Model/FilesDocument.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authCompany**
> \Sufel\Client\Model\AuthToken authCompany($body)

Autentificacion de Empresa

Retorna el token si la empresa esta autorizada

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Sufel\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Sufel\Client\Model\CompanyCredential(); // \Sufel\Client\Model\CompanyCredential | Credenciales de la empresa.

try {
    $result = $apiInstance->authCompany($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->authCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sufel\Client\Model\CompanyCredential**](../Model/CompanyCredential.md)| Credenciales de la empresa. |

### Return type

[**\Sufel\Client\Model\AuthToken**](../Model/AuthToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changePassword**
> changePassword($body)

Cambia la contraseña de la Empresa

Actualización de la contraseña

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sufel\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sufel\Client\Model\PasswordRenew(); // \Sufel\Client\Model\PasswordRenew | Passwords

try {
    $apiInstance->changePassword($body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sufel\Client\Model\PasswordRenew**](../Model/PasswordRenew.md)| Passwords |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creteCompany**
> creteCompany($body)

Crea nueva Empresa

Autorización de nueva empresa.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AdminToken
$config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$apiInstance = new Sufel\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sufel\Client\Model\Company(); // \Sufel\Client\Model\Company | Datos de la empresa.

try {
    $apiInstance->creteCompany($body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->creteCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sufel\Client\Model\Company**](../Model/Company.md)| Datos de la empresa. |

### Return type

void (empty response body)

### Authorization

[AdminToken](../../README.md#AdminToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **darBajaDocument**
> darBajaDocument($body)

Da de baja documento.

Marca como anulado un documento.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sufel\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sufel\Client\Model\DocumentInfo(); // \Sufel\Client\Model\DocumentInfo | Información del documento electrónico.

try {
    $apiInstance->darBajaDocument($body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->darBajaDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sufel\Client\Model\DocumentInfo**](../Model/DocumentInfo.md)| Información del documento electrónico. |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocuments**
> getDocuments($start, $end)

Lista los documentos del emisor

Retorna lista de documentos segun el rando de fecha.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sufel\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sufel\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = new \DateTime("2013-10-20"); // \DateTime | Inicio Rango de Fecha.
$end = new \DateTime("2013-10-20"); // \DateTime | Fin Rango de Fecha.

try {
    $apiInstance->getDocuments($start, $end);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start** | **\DateTime**| Inicio Rango de Fecha. |
 **end** | **\DateTime**| Fin Rango de Fecha. |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

