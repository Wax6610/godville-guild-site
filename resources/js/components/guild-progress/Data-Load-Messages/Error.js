import React from "react";
import { Container, Segment } from "semantic-ui-react";

const Error = () => {
    return (
        <Segment style={{ height: "100px" }}>
            <Container textAlign="center">
                <p>Произошла ошибка</p>
            </Container>
        </Segment>
    );
};

export default Error;
