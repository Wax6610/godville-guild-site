import React from "react";
import { Container, Segment } from "semantic-ui-react";

const EmptyData = () => {
    return (
        <Segment style={{ height: "100px" }}>
            <Container textAlign="center">
                <p>Данные отсутсвуют</p>
            </Container>
        </Segment>
    );
};

export default EmptyData;
