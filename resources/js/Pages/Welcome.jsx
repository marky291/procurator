import React from 'react';
import { Head } from '@inertiajs/inertia-react';
import Layout from '@/Components/Layout';

export default function Welcome(props) {
    return (
        <>
            <Head title="Procurator" />
            <Layout props={props} />
        </>
    );
}
