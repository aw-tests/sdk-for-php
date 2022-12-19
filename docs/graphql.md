# Graphql Service

## GraphQL Endpoint

```http request
GET https://HOSTNAME/v1/graphql
```

** Execute a GraphQL query. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| query | string | **Required** The query to execute. |  |
| operationName | string | The name of the operation to execute. |  |
| variables | string | The JSON encoded variables to use in the query. |  |

## GraphQL Endpoint

```http request
POST https://HOSTNAME/v1/graphql
```

** Execute a GraphQL mutation. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| query | object | The query or queries to execute. | {} |

## GraphQL Endpoint

```http request
POST https://HOSTNAME/v1/graphql/mutation
```

** Execute a GraphQL mutation. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| query | object | The query or queries to execute. | {} |

