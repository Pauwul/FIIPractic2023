exports.handler = async (event) => {
    console.log(`Starting authorizer lambda with event: ${JSON.stringify(event)}`);
    
    const token = event.authorizationToken;
    const effect = token === 'fii-practic' ? "allow" : "deny";
    
    const response = {
        "policyDocument": {
            "Version": "2012-10-17",
            "Statement": [
                {
                    "Action": "execute-api:Invoke",
                    "Resource": "arn:aws:execute-api:*:*:*/*/*",
                    "Effect": effect,
                }
            ]
        }
    }

    return response;
};

