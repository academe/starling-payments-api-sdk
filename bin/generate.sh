#
# Generate the OpenAPI client code, including models.
# Do `composer update` first to pull in the dependency tools.
#

# Directory for this script

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

${DIR}/../vendor/consilience/openapi-generator-psr18/bin/generate.sh \
    --spec=${DIR}/../openapi/starling-payment-services-v1.json \
    --namespace=Academe\\Starling\\PaymentsSdk \
    --generated=${DIR}/../api/

