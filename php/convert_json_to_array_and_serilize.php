<?php


$json = '{
    "orderHeader": {
        "customerIdentifier": "BARCODESINC",
        "zebraReferenceNumber": "",
        "customerReferenceNumber": "ID87310-1",
        "customerSeconderyRefNumber": "87310",
        "billToAccountNumber": "",
        "billToAccountName": "",
        "createDate": "",
        "customerUniqueId": "",
        "requestType": "Depot",
        "actionCode": "NEW_CALL",
        "headerAttributes": {
            "attributes": [
                {
                    "attributeName": "",
                    "attributeValue": ""
                }
            ]
        },
        "orderLines": [
            {
                "orderLine": {
                    "sequence": "",
                    "repairCenter": "",
                    "serialNumber": "20170521400899",
                    "partNumber": "PS20J-P4G1NA00",
                    "modelNumber": "PS20 Plus",
                    "deviceType": "",
                    "requestedQuantity": "",
                    "lineAddress": {
                        "address": [
                            {
                                "addressType": "",
                                "firstName": "Olivia",
                                "lastName": "Ochoa",
                                "attentionTo": "",
                                "siteName": "Olivia Ochoa",
                                "storeNumber": "",
                                "adressLine1": "15701 S. 71st Ct.",
                                "adressLine2": "",
                                "city": "Orland Park",
                                "state": "IL",
                                "county": "",
                                "country": "USA",
                                "postalCode": "60462-6800",
                                "phone": "708-342-9909",
                                "fax": "",
                                "email": "serviceadmins@barcodesinc.com"
                            }
                        ]
                    },
                    "symptomCode": "ZEB136",
                    "problemDescription": "Device freezes all the time, Curbside employees cannot use device because of the ongoing freezing issues. Also, the device does not hold a charge.",
                    "contractNumber": "",
                    "waranteeEndDate": "",
                    "poNumber": "",
                    "inboundCarrier": "",
                    "inboundTrackingNumber": "",
                    "actionCode": "",
                    "lineUniqueId": "",
                    "lineNotes": {
                        "notes": [
                            {
                                "note": "",
                                "noteType": ""
                            }
                        ]
                    },
                    "lineAttributes": {
                        "attributes": []
                    }
                }
            }
        ]
    }
}';

$json_array_serialized = serialize(json_decode($json, true));

echo "UPDATE
`zebra_request_response_logging`
SET
`request` = '$json_array_serialized'
WHERE
repair_id = '';";
