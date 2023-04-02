const AWS = require("aws-sdk");
const docClient = new AWS.DynamoDB.DocumentClient();

exports.handler = async (event) => {
  console.log(`starting lambda with request: ${JSON.stringify(event)}`);

  const fileName = event.pathParameters.fileName;
  const params = {
    TableName: "files-table",
    Key: {
      filePK: "files",
      fileSK: fileName,
    },
  };

  await docClient.get(params).promise();

  return { body: JSON.stringify(response.item) };
};
