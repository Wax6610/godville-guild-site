import React from "react";
import { Loader, Segment, Dimmer } from "semantic-ui-react";

const Loading = () => {
    return (
        <Segment style={{ height: "100px" }}>
            <Dimmer active inverted>
                <Loader size="medium">Идет загрузка данных</Loader>
            </Dimmer>
        </Segment>
    );
};

export default Loading;
