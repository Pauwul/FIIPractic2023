const AWS = require("aws-sdk");
const docClient = new AWS.DynamoDB.DocumentClient();
const sns = new AWS.SNS({ apiVersion: "2010-03-31" });

exports.handler = async (event) => {
  console.log(`starting lambda with request: ${JSON.stringify(event)}`);

  const body = JSON.parse(event.body);
  const params = {
    TableName: "files-table",
    Item: {
      filePK: "files",
      fileSK: body.fileName,
      content: body.content,
    },
  };

  try {
    await docClient.put(params).promise();

    let snsParams = {
      Message: `File: ${body.fileName} - ${body.content} was created successfully!`,
      TopicArn: "arn:aws:sns:aws-central-1:728717349667:files-topic",
    };
    await sns.publish(snsParams).promise();
  } catch (err) {
    throw new Error(err.message);
  }

  return { body: "Item created successfully" };
};
